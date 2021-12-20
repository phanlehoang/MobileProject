package com.example.ticketnow;

import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.app.AlertDialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.nfc.Tag;
import android.os.Bundle;
import android.util.Log;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.widget.TextView;

import java.util.ArrayList;
import java.util.List;

public class KetQua extends AppCompatActivity {

    private TextView tvNull;
    private RecyclerView rvDanhSach;
    private List<Phim> phimList;


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_ket_qua);

        tvNull = findViewById(R.id.tvNull);
        rvDanhSach = findViewById(R.id.rvDanhSach);

        initPhim();
        if(phimList.size() == 0)
            tvNull.setVisibility(View.VISIBLE);
        else
        {
            PhimAdapter adapter = new PhimAdapter(phimList);
            rvDanhSach.setAdapter(adapter);

            LinearLayoutManager llm = new LinearLayoutManager(KetQua.this, LinearLayoutManager.VERTICAL, false);
            rvDanhSach.setLayoutManager(llm);
        }
    }

    private void initPhim()
    {
        phimList = new ArrayList<Phim>();

        ArrayList<String> passData = (ArrayList<String>) getIntent().getSerializableExtra("passData");
        if (passData == null) {
            return;
        }
        for (String piece: passData) {
            phimList.add(new Phim(piece));
        }

        /*phimList.add(new Phim("Tiệc trăng máu", "", "Hài hước", "118p", "18+", "Trong buổi họp mặt của nhóm bạn thân, một thành viên bất ngờ đề xuất trò chơi chia sẻ điện thoại nhằm tăng tinh thần “đoàn kết”. Từ đó, những góc khuất của từng người dần hé lộ và khiến cho mối quan hệ vốn khắng khít của họ bắt đầu lay chuyển.", "Đức Thịnh"));
        phimList.add(new Phim("Liên quân siêu thú", "R.drawable.posterlqst","Hoạt hình", "91p","P","Năm 1969, có 1 chú chó được đưa vào không gian, nhưng một sự cố xảy ra và biến chú thành Siêu Cún. Lạc lối ở tương lai nơi tất cả mọi người đều căm ghét động vật, Siêu Cún cần tìm cho mình những trợ thủ đắc lực để giúp cậu gặp lại chủ nhân của mình. Sau cuộc gặp gỡ tình cờ với Mèo Tia Chớp, Thỏ Thông Thái và tổ chức Vệ Thú – nơi bảo vệ các loài động vật ở Glenfield, Siêu Cún và bộ sậu mới của cậu bất đắc dĩ phải đối đầu với chính quyền thị trấn và trở thành những anh hùng quả cảm.","Ben Smith"));*/
    }

    @Override
    public boolean onCreateOptionsMenu(Menu menu) {
        getMenuInflater().inflate(R.menu.main_menu, menu);
        return true;
    }

    @Override
    public boolean onOptionsItemSelected(MenuItem item) {
        Request request = new Request(this);
        switch (item.getItemId()) {
            case R.id.toTicket:
                request.getTickets();
                return true;
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