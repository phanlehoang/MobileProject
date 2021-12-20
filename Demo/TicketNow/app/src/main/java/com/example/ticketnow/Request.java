package com.example.ticketnow;

import android.Manifest;
import android.app.Activity;
import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.content.Intent;
import android.util.Log;
import android.view.View;
import android.widget.RelativeLayout;
import android.widget.Toast;

import androidx.core.content.ContextCompat;

import com.google.gson.Gson;
import com.google.gson.GsonBuilder;

import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStreamWriter;
import java.lang.reflect.Array;
import java.util.ArrayList;
import java.util.List;

import okhttp3.MultipartBody;
import okhttp3.RequestBody;
import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.Callback;
import retrofit2.Response;
import retrofit2.Retrofit;
import retrofit2.converter.gson.GsonConverterFactory;

public class Request {
    private static final String ACCEPT_HEADER = "application/json, text/plain, */*";
    private static String client_id = "2";
    private static String client_secret = "i8yHmoMyhbRfHv9LbY2REgktpcQiWG3qDRTz6NGs";
    private Gson gson;
    private Retrofit retrofit;
    private ServerAPI serverAPI;
    private Context context;
    private RelativeLayout loadingPanel;
    private Message message;
    private Intent intent;
    private Context ketQua;

    public Request(Context context) {
        this.context = context;
        loadingPanel = ((Activity) context).findViewById(R.id.loadingP);
        message = new Message();
        gson = new GsonBuilder()
                .setLenient()
                .create();
        retrofit = new Retrofit.Builder()
                .baseUrl(Network.getServerIP())
                .addConverterFactory(GsonConverterFactory.create(gson))
                .build();
        serverAPI = retrofit.create(ServerAPI.class);
    }

    public static String getPassword() {
        return client_secret;
    }

    public static void setPassword(String password) {
        client_secret = password;
    }

    private RequestBody buildFormData(String[] dataArray) {
        MultipartBody.Builder formData = new MultipartBody.Builder()
                .setType(MultipartBody.FORM);
        for (String data : dataArray) {
            if (data.isEmpty())
                continue;
            else {
                String[] frags = data.split("=>");
                formData.addFormDataPart(frags[0].trim(), frags[1].trim());
            }
        }
        return formData.build();
    }

    public void isAuthenticated() {
        loadToken();
        Call<Message> call = serverAPI.isAuthenticated(Authenticator.getToken());
        call.enqueue(new Callback<Message>() {
            @Override
            public void onResponse(Call<Message> call, Response<Message> response) {
                getCinemas();
            }

            @Override
            public void onFailure(Call<Message> call, Throwable t) {
                open(Login.class).start().finish();
            }
        });
    }

    public void authenticate(String email, String password) {
        /*RequestBody formData = new MultipartBody.Builder()
                .setType(MultipartBody.FORM)
                .addFormDataPart("grant_type", "password")
                .addFormDataPart("client_id", client_id)
                .addFormDataPart("client_secret", client_secret)
                .addFormDataPart("username", email)
                .addFormDataPart("password", password)
                .build();*/
        RequestBody formData = buildFormData(new String[]{
                "grant_type => password",
                "client_id => " + client_id,
                "client_secret => " + client_secret,
                "username => " + email,
                "password => " + password
        });
        Call<Message> call = serverAPI.authenticate(formData);
        loading();
        call.enqueue(new Callback<Message> () {
            @Override
            public void onResponse(Call<Message>  call, Response<Message>  response) {
                Message message = response.body();
                if (message == null) {
                    new AlertDialog.Builder(context)
                            .setTitle("Oops")
                            .setMessage("Your credential is invalid!")
                            .setNegativeButton("Confirm", new DialogInterface.OnClickListener() {
                                @Override
                                public void onClick(DialogInterface dialog, int which) {
                                    dialog.dismiss();
                                }
                            })
                            .show();
                } else {
                    if (message.getMessage() == "") {
                        Authenticator.setToken(message.getTokenType() + " " + message.getAccessToken());
                        saveToken(Authenticator.getToken());
                        getCinemas();
                    } else {
                        new AlertDialog.Builder(context)
                                .setTitle("Oops")
                                .setMessage("Your credential is invalid!")
                                .setNegativeButton("Confirm", new DialogInterface.OnClickListener() {
                                    @Override
                                    public void onClick(DialogInterface dialog, int which) {
                                        dialog.dismiss();
                                    }
                                })
                                .show();
                    }
                    resume();
                }
            }

            @Override
            public void onFailure(Call<Message>  call, Throwable t) {
                new AlertDialog.Builder(context)
                        .setTitle("Error")
                        .setMessage(t.getMessage())
                        .show();
                resume();
            }
        });
    }


    public void getSchedules(String cinema, String from, String to, String genre, String age) {
        RequestBody formData = buildFormData(new String[] {
                "cinema => " + cinema,
                "from => " + from,
                "to => " + to,
                "genre => " + genre,
                "age => " + age
        });

        //Log.e("form", cinema + " " + from + " " + to + " " + genre + " " + age);

        Call<List<Message>> call = serverAPI.getSchedules(formData, Authenticator.getToken(), ACCEPT_HEADER);
        loading();
        call.enqueue(new Callback<List<Message>>() {
            @Override
            public void onResponse(Call<List<Message>> call, Response<List<Message>> response) {
                List<Message> messages = response.body();
                //Log.e("size", messages.size() + "");
                ArrayList<String> passData = new ArrayList<>();
                for (Message message : messages) {
                    //Log.e("???", new Phim(message.getMovie().serialize()).serialize());
                    passData.add(message.getMovie().serialize());
                }
                open(KetQua.class).with(passData).start();
                resume();
            }

            @Override
            public void onFailure(Call<List<Message>> call, Throwable t) {
                Log.e("getSchedules", t.getMessage());
                open(MainActivity.class).clear().start().finish();
                //open(Login.class).start();
                resume();
            }
        });
    }

    public void getCinemas() {
        Call<List<Message>> call = serverAPI.getCinemas(Authenticator.getToken(), ACCEPT_HEADER);
        call.enqueue(new Callback<List<Message>>() {
            @Override
            public void onResponse(Call<List<Message>> call, Response<List<Message>> response) {
                List<Message> messages = response.body();
                ArrayList<String> passData = new ArrayList<>();
                for (Message message: messages) {
                    passData.add(message.serializeToCumRapParcel());
                }
                open(Homepage.class).with(passData).start().finish();
                resume();
            }

            @Override
            public void onFailure(Call<List<Message>> call, Throwable t) {
                resume();
                open(MainActivity.class).clear().start().finish();
            }
        });
    }

    public void setSeats(String scheduleID, String seat, String map) {
        RequestBody formData = buildFormData(new String[] {
            "schedule => " + scheduleID,
            "seat => " + seat,
            "map => " + map
        });
        Call<List<Message>> call = serverAPI.setSeat(formData, Authenticator.getToken(), ACCEPT_HEADER);
        loading();
        call.enqueue(new Callback<List<Message>>() {
            @Override
            public void onResponse(Call<List<Message>> call, Response<List<Message>> response) {
                Message message = response.body().get(0);
                try {
                    Log.e("message", message.getMessage());
                    if (message.getMessage().equals("1")) {
                        resume();
                        new AlertDialog.Builder(context)
                                .setTitle("Congratulation")
                                .setMessage("Your ticket is booked")
                                .setNegativeButton("OK", new DialogInterface.OnClickListener() {
                                    @Override
                                    public void onClick(DialogInterface dialog, int which) {
                                        dialog.dismiss();
                                        getTickets();
                                        resume();
                                    }
                                })
                                .show();
                    } else {
                        resume();
                        new AlertDialog.Builder(context)
                                .setTitle("Oops")
                                .setMessage("Your ticket could not be booked")
                                .setNegativeButton("Confirm", new DialogInterface.OnClickListener() {
                                    @Override
                                    public void onClick(DialogInterface dialog, int which) {
                                        loading();
                                        getCinemas();
                                    }
                                })
                                .show();
                    }
                } catch (NullPointerException e) {
                    Log.e("NPE", e.getMessage());
                    resume();
                    new AlertDialog.Builder(context)
                            .setTitle("Congratulation")
                            .setMessage("Your ticket is booked")
                            .setNegativeButton("OK", new DialogInterface.OnClickListener() {
                                @Override
                                public void onClick(DialogInterface dialog, int which) {
                                    dialog.dismiss();
                                    getTickets();
                                    resume();
                                }
                            })
                            .show();
                }
            }

            @Override
            public void onFailure(Call<List<Message>> call, Throwable t) {
                resume();
                open(MainActivity.class).clear().start().finish();
            }
        });
    }

    public void getTickets() {
        Call<List<Message>> call = serverAPI.getTickets(Authenticator.getToken(), ACCEPT_HEADER);
        call.enqueue(new Callback<List<Message>>() {
            @Override
            public void onResponse(Call<List<Message>> call, Response<List<Message>> response) {
                List<Message> messages = response.body();
                ArrayList<String> passData = new ArrayList<>();
                for (Message message : messages) {
                    Log.e("ticket", message.getTicket().serialize());
                    passData.add(message.getTicket().serialize());
                }
                resume();
                open(Info.class).with(passData).clear().start().finish();
            }

            @Override
            public void onFailure(Call<List<Message>> call, Throwable t) {
                resume();
                open(MainActivity.class).clear().start().finish();
            }
        });
    }

    public void deleteTicket(String id) {
        RequestBody formData = buildFormData(new String[] {
           "id => " + id
        });

        Call<List<Message>> call = serverAPI.deleteTicket(formData, Authenticator.getToken(), ACCEPT_HEADER);
        call.enqueue(new Callback<List<Message>>() {
            @Override
            public void onResponse(Call<List<Message>> call, Response<List<Message>> response) {
                Toast.makeText(context, "Deleted!", Toast.LENGTH_SHORT).show();
            }

            @Override
            public void onFailure(Call<List<Message>> call, Throwable t) {
                open(MainActivity.class).clear().start().finish();
            }
        });
    }

    public void logout() {
        Call<Message> call = serverAPI.logout(Authenticator.getToken(), ACCEPT_HEADER);
        loading();
        call.enqueue(new Callback<Message>() {
            @Override
            public void onResponse(Call<Message> call, Response<Message> response) {
                Message message = response.body();
                resume();
                open(MainActivity.class).clear().start().finish();
            }

            @Override
            public void onFailure(Call<Message> call, Throwable t) {
                resume();
                open(MainActivity.class).clear().start().finish();
            }
        });
    }

    private void loading() {
        if (loadingPanel == null) {
            return;
        } else {
            loadingPanel.setVisibility(View.VISIBLE);
        }
    }

    private void resume() {
        if (loadingPanel == null) {
            return;
        } else {
            loadingPanel.setVisibility(View.GONE);
        }
    }

    public Request open(Class activity) {
        intent = new Intent(context, activity);
        return this;
    }

    public Request clear() {
        intent.setFlags(Intent.FLAG_ACTIVITY_NEW_TASK | Intent.FLAG_ACTIVITY_CLEAR_TASK);
        return this;
    }

    public Request with(ArrayList<String> data) {
        if (data == null) {
            return this;
        }
        else if (data.size() == 0) {
            return this;
        } else {
            intent.putExtra("passData", data);
        }
        return this;
    }

    public Request start() {
        context.startActivity(intent);
        return this;
    }

    public void finish() {
        ((Activity) context).finish();
    }

    private void saveToken(String token) {
        //int result = ContextCompat.checkSelfPermission(this, Manifest.permission.WRITE_EXTERNAL_STORAGE);
        //if (result == PackageManager.PERMISSION_GRANTED) {
        try {
            OutputStreamWriter output = new OutputStreamWriter(context.openFileOutput("session", Context.MODE_PRIVATE));
            output.write(token);
            output.close();

        } catch (IOException e) {
            Log.e("IOException", e.getMessage());
        }
        //}
    }

    private void loadToken() {
        //int result = ContextCompat.checkSelfPermission(context, Manifest.permission.READ_EXTERNAL_STORAGE);
        try {
            InputStream inputStream = context.openFileInput("session");

            if (inputStream == null) {
                Authenticator.setToken("");
            } else {
                InputStreamReader input = new InputStreamReader(inputStream);
                BufferedReader reader = new BufferedReader(input);
                String token = reader.readLine();
                Authenticator.setToken(token);
            }

        } catch (FileNotFoundException e) {
            Authenticator.setToken("");
        } catch (IOException e) {
            Log.e("IOException", e.getMessage());
        }
        /*BufferedReader reader = null;
        try {

            reader = new BufferedReader(
                    new InputStreamReader(getAssets().open("session"))
            );
            Authenticator.setToken(reader.readLine());
            reader.close();
        } catch (IOException e) {
            Log.e("IOException", e.getMessage());
        }*/
    }
}
