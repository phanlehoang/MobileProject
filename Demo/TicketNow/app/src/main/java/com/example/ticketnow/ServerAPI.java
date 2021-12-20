package com.example.ticketnow;

import java.util.List;

import okhttp3.RequestBody;
import okhttp3.ResponseBody;
import retrofit2.Call;
import retrofit2.http.Body;
import retrofit2.http.GET;
import retrofit2.http.Header;
import retrofit2.http.Headers;
import retrofit2.http.POST;

public interface ServerAPI {

    @GET("api/user")
    Call<Message> isAuthenticated(@Header("Authorization") String token);

    @POST("oauth/token")
    Call<Message> authenticate(@Body RequestBody body);

    @GET("api/cinema/index")
    Call<List<Message>> getCinemas(@Header("Authorization") String token,
                                  @Header("Accept") String acceptHeader);

    @POST("api/movie/show")
    Call<List<Message>> getSchedules(@Body RequestBody body,
                                     @Header("Authorization") String token,
                                     @Header("Accept") String acceptHeader);

    @POST("api/ticket/book")
    Call<List<Message>> setSeat(@Body RequestBody body,
                          @Header("Authorization") String token,
                          @Header("Accept") String acceptHeader);

    @GET("api/ticket/index")
    Call<List<Message>> getTickets(@Header("Authorization") String token,
                                   @Header("Accept") String acceptHeader);

    @POST("api/ticket/delete")
    Call<List<Message>> deleteTicket(@Body RequestBody body,
                                     @Header("Authorization") String token,
                                     @Header("Accept") String acceptHeader);

    @GET("api/logout")
    Call<Message> logout(@Header("Authorization") String token,
                          @Header("Accept") String acceptHeader);
}
