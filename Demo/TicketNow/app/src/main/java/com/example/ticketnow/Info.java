package com.example.ticketnow;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.List;

public class Info extends AppCompatActivity {

    private TextView tvNullInfo;
    private RecyclerView rvInfo;
    private List<BookedInfo> list;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_info);

        tvNullInfo = findViewById(R.id.tvNullInfo);
        rvInfo = findViewById(R.id.rvInfo);

        initInfo();
        if(list.size() == 0)
            tvNullInfo.setVisibility(View.VISIBLE);
        else
        {
            BookedInfoAdapter bookedInfoAdapter = new BookedInfoAdapter(list);
            rvInfo.setAdapter(bookedInfoAdapter);

            LinearLayoutManager llm = new LinearLayoutManager(Info.this, LinearLayoutManager.VERTICAL, false);
            rvInfo.setLayoutManager(llm);
        }
    }

    @Override
    public void onBackPressed() {
        Request request = new Request(this);
        request.getCinemas();
    }

    public  void initInfo()
    {
        list = new ArrayList<BookedInfo>();

        ArrayList<String> passData = (ArrayList<String>) getIntent().getSerializableExtra("passData");
        if (passData == null) {
            return;
        }

        for (String piece: passData) {
            list.add(new BookedInfo(piece));
        }

        /*list.add(new BookedInfo("Tiệc trăng máu", "CGV","01-01-2020","09:00","A1, A2, A3"));
        list.add(new BookedInfo("Thang máy", "BHD","05-01-2020","19:20","B1"));*/
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.custom_main_menu_1, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        Request request = new Request(this);
        switch (item.getItemId()) {
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