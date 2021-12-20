package com.example.ticketnow;

import androidx.appcompat.app.AppCompatActivity;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.os.Bundle;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

public class Setting extends AppCompatActivity {
    EditText cP, sI;
    Button confirm;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_setting);

        sI = findViewById(R.id.etServerIP);
        cP = findViewById(R.id.etClientPassword);
        confirm = findViewById(R.id.settingConfirm);

        sI.setText(Network.getServerIP());
        cP.setText(Request.getPassword());

        confirm.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Network.setServerIP(sI.getText().toString().trim());
                Request.setPassword(cP.getText().toString().trim());
                Toast.makeText(Setting.this, "Success", Toast.LENGTH_SHORT).show();
            }
        });
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.custom_main_menu_2, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        onBackPressed();
        return true;
    }
}