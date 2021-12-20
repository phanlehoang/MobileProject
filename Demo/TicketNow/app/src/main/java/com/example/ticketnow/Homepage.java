package com.example.ticketnow;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.app.AlertDialog;
import android.app.DatePickerDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.DatePicker;
import android.widget.EditText;
import android.widget.RadioButton;
import android.widget.RadioGroup;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import java.text.DateFormat;
import java.text.SimpleDateFormat;
import java.util.ArrayList;
import java.util.Calendar;
import java.util.Date;
import java.util.List;
import java.util.Locale;

public class Homepage extends AppCompatActivity {
    private RecyclerView recyclerView;
    private RadioGroup grpAge;
    private EditText dateFrom, dateTo;
    private List<CumRap> cumRapList;
    private Spinner sTheLoai;
    private Button btnSearch, btnReset;
    private Calendar calendarFrom, calendarTo;
    private TextView tvAge, tvGenre;

    private static TextView tvCinema;
    private static int cumRapID = -1;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_homepage);

        recyclerView = findViewById(R.id.rvCumRap);
        dateFrom = findViewById(R.id.dateFrom);
        dateTo = findViewById(R.id.dateTo);
        grpAge = findViewById(R.id.grdAge);

        tvCinema = findViewById(R.id.tvKetQuaRap);
        tvAge = findViewById(R.id.tvKetQuaTuoi);
        tvGenre = findViewById(R.id.tvKetQuaTheLoai);

        /*dateFrom.setText(DateFormat.getDateInstance().format(new Date().getTime()));
        dateTo.setText(DateFormat.getDateInstance().format(new Date().getTime()));*/

        LinearLayoutManager llm = new LinearLayoutManager(Homepage.this, LinearLayoutManager.HORIZONTAL, false);
        recyclerView.setLayoutManager(llm);

        initCumRap();

        CumRapAdapter adapter = new CumRapAdapter(cumRapList);
        recyclerView.setAdapter(adapter);

        String[] arraySpinner = new String[] {
                "Hành động", "Phiêu lưu", "Hài hước", "Kinh dị", "Viễn tưởng", "Hoạt hình"
        };
        sTheLoai = (Spinner) findViewById(R.id.listTheLoai);
        ArrayAdapter<String> aTheLoai = new ArrayAdapter<String>(this,
                android.R.layout.simple_spinner_item, arraySpinner);
        aTheLoai.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        sTheLoai.setAdapter(aTheLoai);


        btnSearch = findViewById(R.id.btnSearch);
        btnReset = findViewById(R.id.btnReset);

        calendarFrom = Calendar.getInstance();
        calendarTo = Calendar.getInstance();

        DatePickerDialog.OnDateSetListener datePickerFrom = new DatePickerDialog.OnDateSetListener() {
            @Override
            public void onDateSet(DatePicker view, int year, int month, int dayOfMonth) {
                calendarFrom.set(Calendar.YEAR, year);
                calendarFrom.set(Calendar.MONTH, month);
                calendarFrom.set(Calendar.DAY_OF_MONTH, dayOfMonth);
                updateDateFrom();
            }
        };

        DatePickerDialog.OnDateSetListener datePickerTo = new DatePickerDialog.OnDateSetListener() {
            @Override
            public void onDateSet(DatePicker view, int year, int month, int dayOfMonth) {
                calendarTo.set(Calendar.YEAR, year);
                calendarTo.set(Calendar.MONTH, month);
                calendarTo.set(Calendar.DAY_OF_MONTH, dayOfMonth);
                updateDateTo();
            }
        };

        dateFrom.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                DatePickerDialog dpd = new DatePickerDialog(Homepage.this,
                    datePickerFrom,
                    calendarFrom.get(Calendar.YEAR),
                    calendarFrom.get(Calendar.MONTH),
                    calendarFrom.get(Calendar.DAY_OF_MONTH));
                dpd.getDatePicker().setMinDate(Calendar.getInstance().getTimeInMillis());
                dpd.show();
            }
        });

        dateTo.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                DatePickerDialog dpd = new DatePickerDialog(Homepage.this,
                    datePickerTo,
                    calendarTo.get(Calendar.YEAR),
                    calendarTo.get(Calendar.MONTH),
                    calendarTo.get(Calendar.DAY_OF_MONTH));
                dpd.getDatePicker().setMinDate(calendarFrom.getTimeInMillis());
                dpd.show();
            }
        });

        sTheLoai.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                tvGenre.setText(" Thể loại: " + aTheLoai.getItem(position));
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {
                tvGenre.setText(" Thể loại: ");
            }
        });

        grpAge.setOnCheckedChangeListener(new RadioGroup.OnCheckedChangeListener() {
            @Override
            public void onCheckedChanged(RadioGroup group, int checkedId) {
                RadioButton checkedRadioButton = (RadioButton) group.findViewById(checkedId);
                if (checkedRadioButton.isChecked()) {
                    tvAge.setText(" Tuổi: " + checkedRadioButton.getText().toString());
                }
            }
        });

        btnSearch.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                dateFrom.setText("01-01-2021");
                dateTo.setText("07-01-2021");
                if (isValidInput()) {
                    String cinema = cumRapList.get(cumRapID).getName();
                    String from = dateFrom.getText().toString();
                    String to = dateTo.getText().toString();
                    String genre = sTheLoai.getSelectedItem().toString();
                    String age = "";
                    if (grpAge.getCheckedRadioButtonId() == R.id.rl13) {
                        age = "P";
                    } else if (grpAge.getCheckedRadioButtonId() == R.id.r13) {
                        age = "13+";
                    } else if (grpAge.getCheckedRadioButtonId() == R.id.r16) {
                        age = "16+";
                    } else if (grpAge.getCheckedRadioButtonId() == R.id.r18) {
                        age = "18+";
                    }

                    Request request = new Request(Homepage.this);
                    request.getSchedules(cinema, from, to, genre, age);
                }
                //validateInput();
                //sTheLoai.getSelectedItem().toString()
            }
        });
    }

    private boolean isValidInput() {
        if (cumRapID == -1) {
            showAlertDialog("cụm rạp");
            return false;
        }
        if (dateFrom.getText().toString().isEmpty() || dateTo.getText().toString().isEmpty()) {
            showAlertDialog("ngày");
            return false;
        }
        if (grpAge.getCheckedRadioButtonId() == -1) {
            showAlertDialog("độ tuổi");
            return false;
        }
        return true;
    }

    private void showAlertDialog(String content) {
        new AlertDialog.Builder(Homepage.this)
                .setTitle("Oops")
                .setMessage("Xin hãy chọn " + content)
                .setNegativeButton("Ok", new DialogInterface.OnClickListener() {
                    @Override
                    public void onClick(DialogInterface dialog, int which) {
                        dialog.dismiss();
                    }
                })
                .show();
    }

    private void updateDateFrom() {
        String format = "dd-MM-yyyy";
        SimpleDateFormat sdf = new SimpleDateFormat(format);
        dateFrom.setText(sdf.format(calendarFrom.getTime()));
        if (calendarFrom.getTime().after(calendarTo.getTime())) {
            calendarTo.setTime(calendarFrom.getTime());
            updateDateTo();
        }
    }

    private void updateDateTo() {
        String format = "dd-MM-yyyy";
        SimpleDateFormat sdf = new SimpleDateFormat(format);
        dateTo.setText(sdf.format(calendarTo.getTime()));
    }

    private void initCumRap()
    {
        cumRapList = new ArrayList<CumRap>();

        ArrayList<String> passData = (ArrayList<String>) getIntent().getSerializableExtra("passData");
        if (passData == null) {
            return;
        }
        for (String piece: passData) {
            cumRapList.add(new CumRap(piece));
        }

        /*cumRapList.add(new CumRap("Vivo City","CGV", "cgv.jpeg","bcgv.jpg"));
        cumRapList.add(new CumRap("Bitexco","BHD", "bhd.png","bbhd.jpg"));
        cumRapList.add(new CumRap("Quốc Thanh","Cinestar", "cinesta.png","bcinestar.jpg"));*/
    }

    public static void pickCumRap(int id, String name) {
        cumRapID = id;
        tvCinema.setText(" Rạp: " + name);
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main_menu, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        Request request = new Request(this);
        switch (item.getItemId()) {
            case R.id.toTicket:
                request.getTickets();
                return true;
            case R.id.toSetting:
                Intent intent = new Intent(this, Setting.class);
                startActivity(intent);
            case R.id.toLogout:
                new AlertDialog.Builder(this)
                        .setTitle("Logout")
                        .setMessage("Are you sure?")
                        .setPositiveButton("Yes", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialog, int which) {
                                request.logout();
                            }
                        })
                        .setNegativeButton("no", new DialogInterface.OnClickListener() {
                            @Override
                            public void onClick(DialogInterface dialog, int which) {
                                dialog.dismiss();
                            }
                        })
                        .show();
                return true;
            default:
                return super.onOptionsItemSelected(item);
        }
    }
}