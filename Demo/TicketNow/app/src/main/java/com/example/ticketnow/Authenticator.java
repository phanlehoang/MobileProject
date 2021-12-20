package com.example.ticketnow;

import java.io.File;

public class Authenticator {
    private static String token = "";

    public static String getToken() {
        return token;
    }

    public static void setToken(String accessToken) {
        token = accessToken;
    }
}
