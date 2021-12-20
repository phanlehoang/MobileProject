package com.example.ticketnow;

import android.content.Context;
import android.net.ConnectivityManager;
import android.net.NetworkInfo;
import android.net.ConnectivityManager;
import android.os.NetworkOnMainThreadException;

import java.net.InetAddress;
import java.net.UnknownHostException;

import static androidx.core.content.ContextCompat.getSystemService;

public class Network {
    private static String ipAddress = "http://10.0.2.2:8000/";

    public static boolean isNetworkConnected(Context context) {
        ConnectivityManager cm = (ConnectivityManager) context.getSystemService(Context.CONNECTIVITY_SERVICE);

        NetworkInfo activeNetworkInfo = cm.getActiveNetworkInfo();
        return activeNetworkInfo != null && activeNetworkInfo.isConnectedOrConnecting() && activeNetworkInfo.isAvailable();
    }

    public static String getServerIP() {
        return ipAddress;
    }

    public static void setServerIP(String ip) {
        ipAddress = ip;
    }


    public static String getServerStorage() {
        return getServerIP() + "storage/";
    }
}
