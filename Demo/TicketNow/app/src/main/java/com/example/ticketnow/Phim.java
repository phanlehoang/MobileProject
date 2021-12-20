package com.example.ticketnow;

import com.google.gson.annotations.SerializedName;

import java.util.ArrayList;
import java.util.List;

public class Phim {

    public String getTenPhim() {
        return tenPhim;
    }

    public void setTenPhim(String tenPhim) {
        this.tenPhim = tenPhim;
    }

    public String getPoster() {
        return poster;
    }

    public void setPoster(String poster) {
        this.poster = poster;
    }

    public String getTheLoai() {
        return theLoai;
    }

    public void setTheLoai(String theLoai) {
        this.theLoai = theLoai;
    }

    public String getThoiLuong() {
        return thoiLuong;
    }

    public void setThoiLuong(String thoiLuong) {
        this.thoiLuong = thoiLuong;
    }

    public String getDoTuoi() {
        return doTuoi;
    }

    public void setDoTuoi(String doTuoi) {
        this.doTuoi = doTuoi;
    }

    public String getNoiDung() {
        return noiDung;
    }

    public void setNoiDung(String noiDung) {
        this.noiDung = noiDung;
    }

    public String getDaoDien() {
        return daoDien;
    }

    public void setDaoDien(String daoDien) {
        this.daoDien = daoDien;
    }

    public String getTrailer() {
        return trailer;
    }

    public void setTrailer(String trailer) {
        this.trailer = trailer;
    }

    public List<SuatChieu> getSuatChieus() {
        return suatChieus;
    }

    public void setSuatChieu(List<SuatChieu> suatChieus) {
        this.suatChieus = suatChieus;
    }

    public String getId() {
        return id;
    }

    public void setId(String id) {
        this.id = id;
    }

    public Phim(String tenPhim, String poster, String theLoai, String thoiLuong, String doTuoi, String noiDung, String daoDien) {
        this.tenPhim = tenPhim;
        this.poster = poster;
        this.theLoai = theLoai;
        this.thoiLuong = thoiLuong;
        this.doTuoi = doTuoi;
        this.noiDung = noiDung;
        this.daoDien = daoDien;
    }

    public Phim(String parcel) {
        String[] fragments = parcel.split(">");
        id = fragments[0];
        tenPhim = fragments[1];
        poster = fragments[2];
        theLoai = fragments[3];
        thoiLuong = fragments[4];
        doTuoi = fragments[5];
        noiDung = fragments[6];
        daoDien = fragments[7];
        trailer = fragments[8];
        suatChieus = new ArrayList<>();
        int listSize = Integer.parseInt(fragments[9]);
        for (int i = 0; i < listSize; i++) {
            suatChieus.add(new SuatChieu(fragments[10 + i * 5], fragments[11 + i * 5], fragments[12 + i * 5], fragments[13 + i * 5], fragments[14 + i * 5]));
        }
    }

    public String serialize() {
        String parcel = id + ">" + tenPhim + ">" + poster + ">" + theLoai + ">" + thoiLuong + ">" + doTuoi + ">" + noiDung + ">" + daoDien + ">" + trailer + ">" + suatChieus.size();
        for (int i = 0; i < suatChieus.size(); i++) {
            parcel += ">" + suatChieus.get(i).serialize();
        }
        return parcel;
    }

    public String id;
    public String tenPhim;
    public String poster;
    public String theLoai;
    public String thoiLuong;
    public String doTuoi; // 1 - 2 - 3 - 4
    public String noiDung;
    public String daoDien;
    public String trailer;
    @SerializedName("schedules")
    public List<SuatChieu> suatChieus;
}
