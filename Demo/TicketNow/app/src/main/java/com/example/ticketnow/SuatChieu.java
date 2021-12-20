package com.example.ticketnow;

public class SuatChieu {
    public String id;

    public String ngay;

    public String suatChieu;

    public String choNgoi;

    public String cumRap;

    public String tenPhim;

    public SuatChieu(String id, String ngay, String suatChieu, String choNgoi, String cumrap) {
        this.id = id;
        this.ngay = ngay;
        this.suatChieu = suatChieu;
        this.choNgoi = choNgoi;
        this.tenPhim = "";
        this.cumRap = cumrap;
    }

    public SuatChieu(String id, String ngay, String suatChieu, String choNgoi, String tenPhim, String cumrap) {
        this.id = id;
        this.ngay = ngay;
        this.suatChieu = suatChieu;
        this.choNgoi = choNgoi;
        this.tenPhim = tenPhim;
        this.cumRap = cumrap;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public String getNgay() {
        return ngay;
    }

    public String getSuatChieu() {
        return suatChieu;
    }

    public String getCumRap() {
        return cumRap;
    }

    public String getChoNgoi() {
        return choNgoi;
    }

    public String getTenPhim() {
        return tenPhim;
    }

    public String serialize() {
        return id + ">" + ngay + ">" + suatChieu + ">" + choNgoi + ">" + cumRap;
    }

    public String fullySerialize() {
        return id + ">" + ngay + ">" + suatChieu + ">" + choNgoi + ">" + tenPhim + ">" + cumRap;
    }
}
