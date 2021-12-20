package com.example.ticketnow;

import com.google.gson.annotations.SerializedName;

public class Message {
    @SerializedName("feedback")
    public String message;

    @SerializedName("token_type")
    public String tokenType;

    @SerializedName("access_token")
    public String accessToken;

    public String id;

    //Cum Rap
    public String name;

    public String diachi;

    public String image;

    public String background;

    //Phim
    public Phim phim;

    //BookedInfo
    public BookedInfo ticket;

    public Message() {
        message = "";
        tokenType = "";
        accessToken = "";
        name = "";
        diachi = "";
        image = "";
        background = "";
        phim = null;
        id = "";
    }

    public String serializeToCumRapParcel() {
        return id + ">" + diachi + ">" + name + ">" + image + ">" + background;
    }

    public BookedInfo getTicket() {
        return ticket;
    }

    public String serializeToSuatChieuParcel() {
        return "";
    }

    public String serializeToPhimParcel() {
        return "";
    }

    public String getMessage() {
        return message;
    }

    public void setMessage(String message) {
        this.message = message;
    }

    public String getTokenType() {
        return tokenType;
    }

    public void setTokenType(String tokenType) {
        this.tokenType = tokenType;
    }

    public String getAccessToken() {
        return accessToken;
    }

    public void setAccessToken(String accessToken) {
        this.accessToken = accessToken;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getDiachi() {
        return diachi;
    }

    public void setDiachi(String diachi) {
        this.diachi = diachi;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String getBackground() {
        return background;
    }

    public void setBackground(String background) {
        this.background = background;
    }

    public Phim getMovie() {
        return phim;
    }

    public void setMovie(Phim movie) {
        this.phim = movie;
    }
}
