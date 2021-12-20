package com.example.ticketnow;

import com.google.gson.annotations.SerializedName;

public class BookedInfo {
    public String id;
    /*private String ngayChieu;
    private String suatChieu;*/
    @SerializedName("seat")
    public String soGhe;
    public String code;
    @SerializedName("schedule")
    public SuatChieu suatChieu;


    public BookedInfo(String ngayChieu, String suatChieu, String soGhe) {
        /*this.ngayChieu = ngayChieu;
        this.suatChieu = suatChieu;*/
        this.soGhe = soGhe;
    }

    public BookedInfo(String parcel) {
        String[] fragments = parcel.split(">");
        this.id = fragments[0];
        this.soGhe = fragments[1];
        this.code = fragments[2];
        suatChieu = new SuatChieu(fragments[3], fragments[4], fragments[5], fragments[6], fragments[7], fragments[8]);
    }

    public String serialize() {
        return id + ">" + soGhe + ">" + code + ">" + suatChieu.getId() + ">" + suatChieu.getNgay() + ">" + suatChieu.getSuatChieu() + ">" + suatChieu.getChoNgoi() + ">" + suatChieu.getTenPhim() + ">" + suatChieu.getCumRap();
    }

    public String getId() {
        return id;
    }

    public String getTenPhim() {
        return suatChieu.getTenPhim();
    }

    public String getCumRap() {
        return suatChieu.getCumRap();
    }

    public String getNgayChieu() {
        return suatChieu.getNgay();
    }

    public String getSuatChieu() {
        return suatChieu.getSuatChieu();
    }

    public String getSoGhe() {
        return soGhe;
    }

    public String getNgayGio()
    {
        return "Ngày: " + suatChieu.getNgay() + " - Giờ chiếu: " + suatChieu.getSuatChieu();
    }

    public String getCode() {
        return code;
    }

}
