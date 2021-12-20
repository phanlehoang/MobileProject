package com.example.ticketnow;

public class CumRap {
    String id;
    String diachi;
    String name;
    String image;
    String background;

    public CumRap(String id, String name, String image, String background)
    {
        this.id = "";
        this.diachi = id;
        this.name = name;
        this.image = image;
        this.background = background;
    }

    public CumRap(String parcel) {
        String[] fragments = parcel.split(">");
        if (fragments.length == 5) {
            this.id = fragments[0];
            this.diachi = fragments[1];
            this.name = fragments[2];
            this.image = fragments[3];
            this.background = fragments[4];
        } else {
            this.diachi = "";
            this.name = "";
            this.image = "";
            this.background = "";
        }
    }

    public String getID() {
        return id;
    }

    public void setID(String id) {
        this.id = id;
    }

    public String getDiachi() {
        return diachi;
    }

    public void setDiachi(String diachi) {
        this.diachi = diachi;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getImage() {
        return image;
    }

    public void setImage(String image) {
        this.image = image;
    }

    public String serialize() {
        return id + ">" + diachi + ">" + name + ">" + image + ">" + background;
    }
}
