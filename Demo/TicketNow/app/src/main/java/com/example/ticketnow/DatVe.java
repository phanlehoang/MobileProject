package com.example.ticketnow;

import androidx.appcompat.app.AppCompatActivity;

import android.app.ActionBar;
import android.app.AlertDialog;
import android.app.Dialog;
import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.util.Log;
import android.view.Gravity;
import android.view.Menu;
import android.view.MenuItem;
import android.view.View;
import android.view.ViewGroup;
import android.view.Window;
import android.widget.AdapterView;
import android.widget.ArrayAdapter;
import android.widget.Button;
import android.widget.CheckBox;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.LinearLayout;
import android.widget.PopupWindow;
import android.widget.RelativeLayout;
import android.widget.Spinner;
import android.widget.TextView;
import android.widget.Toast;

import com.squareup.picasso.Picasso;

import java.util.ArrayList;
import java.util.Collections;

public class DatVe extends AppCompatActivity {

    private TextView tvTitleDatVe, tvTenPhimUpper, tvPhimDaChon, tvNgayDaChon, tvGheDaChon, tvSuatChieuChon;
    private EditText txtSoVe;
    private Button btnChonCho, btnDatVe;
    private PopupWindow mpopup;
    private ArrayList<String> listSeat, booked, aNgayChieu, aSuatChieu;
    private Spinner sNgayChieu, sSuatChieu;
    private Phim curPhim;
    private ImageView dvPoster;
    private ArrayAdapter<String> adapterSuatChieu;

    private String[] alphabet = new String[]{"A", "B", "C"};

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_dat_ve);

        listSeat = new ArrayList<String>();
        booked = new ArrayList<String>();

        tvTitleDatVe = findViewById(R.id.tvTitleDatVe);
        tvTenPhimUpper = findViewById(R.id.tvTenPhimUpper);
        tvPhimDaChon = findViewById(R.id.tvPhimDaChon);
        tvNgayDaChon = findViewById(R.id.tvNgayDaChon);
        tvGheDaChon = findViewById(R.id.tvGheDaChon);
        tvSuatChieuChon = findViewById(R.id.tvSuatChieuChon);

        btnDatVe = findViewById(R.id.btnDatVe);
        btnChonCho = findViewById(R.id.btnChonCho);
        txtSoVe = findViewById(R.id.txtSoVe);
        sNgayChieu = findViewById(R.id.listNgayChieu);
        sSuatChieu = findViewById(R.id.listSuatChieu);
        dvPoster = findViewById(R.id.dvPoster);

        initData();

        sNgayChieu.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                tvNgayDaChon.setText(sNgayChieu.getSelectedItem().toString());
                aSuatChieu.clear();
                adapterSuatChieu.notifyDataSetChanged();
                String ngay = aNgayChieu.get(position);
                for (SuatChieu suatChieu : curPhim.getSuatChieus()) {
                    if (suatChieu.getNgay().equals(ngay)) {
                        aSuatChieu.add(suatChieu.getSuatChieu());
                    }
                }
                Collections.sort(aSuatChieu);
                adapterSuatChieu.notifyDataSetChanged();
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {
                aSuatChieu.clear();
                tvNgayDaChon.setText("");
            }
        });

        sSuatChieu.setOnItemSelectedListener(new AdapterView.OnItemSelectedListener() {
            @Override
            public void onItemSelected(AdapterView<?> parent, View view, int position, long id) {
                tvSuatChieuChon.setText(aSuatChieu.get(position));
            }

            @Override
            public void onNothingSelected(AdapterView<?> parent) {
                tvSuatChieuChon.setText("");
            }
        });

        btnDatVe.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                if (listSeat.size() == 0) {
                    new AlertDialog.Builder(DatVe.this)
                            .setTitle("Oops")
                            .setMessage("Xin hãy chọn ghế")
                            .setNegativeButton("Ok", new DialogInterface.OnClickListener() {
                                @Override
                                public void onClick(DialogInterface dialog, int which) {
                                    dialog.dismiss();
                                }
                            })
                            .show();
                } else {
                    StringBuffer buffer = new StringBuffer();
                    for (int i = 0; i < 3; i++) {
                        for (int j = 1; j < 9; j++) {
                            String pos = alphabet[i] + j;
                            if (listSeat.contains(pos) || booked.contains(pos)) {
                                buffer.append(pos);
                                buffer.append(":0");
                            } else {
                                buffer.append(pos);
                                buffer.append(":1");
                            }
                            if (i == 2 && j == 8) {
                                continue;
                            } else {
                                buffer.append(";");
                            }
                        }
                    }
                    String scheduleID = "";
                    for (SuatChieu suatChieu : curPhim.getSuatChieus()) {
                        if (suatChieu.getNgay().equals(sNgayChieu.getSelectedItem().toString().trim()) && suatChieu.getSuatChieu().equals(sSuatChieu.getSelectedItem().toString().trim())) {
                            scheduleID = suatChieu.getId();
                            break;
                        }
                    }
                    Request request = new Request(DatVe.this);
                    request.setSeats(scheduleID, tvGheDaChon.getText().toString(), buffer.toString());
                }
            }
        });

        //load từ database các ngày chiếu,
        /*aNgayChieu = new String[] {
                "01-01-2021", "02-01-2021", "03-01-2021", "04-01-2021", "05-01-2021", "06-01-2021"
        };*/
        ArrayAdapter<String> adapterNgayChieu = new ArrayAdapter<String>(this,
                android.R.layout.simple_spinner_item, aNgayChieu);
        adapterNgayChieu.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        sNgayChieu.setAdapter(adapterNgayChieu);

        //chọn ngày chiếu rồi mới enable spinner suất chiếu, tìm tất cả các suất chiếu trong ngày
        /*aSuatChieu = new String[] {
                "09:00", "11:00", "13:00", "15:00", "17:00"
        };*/
        adapterSuatChieu = new ArrayAdapter<String>(this,
                android.R.layout.simple_spinner_item, aSuatChieu);
        adapterNgayChieu.setDropDownViewResource(android.R.layout.simple_spinner_dropdown_item);
        sSuatChieu.setAdapter(adapterSuatChieu);

        btnChonCho.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View view) {

                if (sSuatChieu.getSelectedItem() == null) {
                    new AlertDialog.Builder(DatVe.this)
                            .setTitle("Oops")
                            .setMessage("Xin hãy chọn suất chiếu")
                            .setNegativeButton("Ok", new DialogInterface.OnClickListener() {
                                @Override
                                public void onClick(DialogInterface dialog, int which) {
                                    dialog.dismiss();
                                }
                            })
                            .show();
                } else {
                    // mở popup sơ đồ chỗ ngồi lên
                    View popUpView = getLayoutInflater().inflate(R.layout.layout_sodo,
                            null); // inflating popup layout
                    mpopup = new PopupWindow(popUpView, LinearLayout.LayoutParams.MATCH_PARENT,
                            LinearLayout.LayoutParams.WRAP_CONTENT, true); // Creation of popup
                    mpopup.setAnimationStyle(android.R.style.Animation_Dialog);
                    mpopup.showAtLocation(popUpView, Gravity.CENTER, 0, 0); // Displaying popup

                    Button btnDone = popUpView.findViewById(R.id.btnDone);

                    //nút xác nhận chọn, đóng popup và cập nhật thông tin lên UI
                    btnDone.setOnClickListener(new View.OnClickListener() {
                        @Override
                        public void onClick(View view) {
                            mpopup.dismiss();
                            if(listSeat.size() > 0)
                            {
                                txtSoVe.setText(Integer.toString(listSeat.size()));
                                int size = listSeat.toString().length();
                                tvGheDaChon.setText(listSeat.toString().substring(1, size - 1));
                            }
                            else
                            {
                                Log.e("TAG", " Không đặt vé nào, hoặc làm sai cái checkbox rồi ");
                            }
                        }
                    });


                    //tạo list seat đã book => không cho chọn các chỗ này

                    /*booked.add("A1");
                    booked.add("B1");booked.add("C2");booked.add("C3");
                    booked.add("A7");*/

                    setBookedList();

                    setBookedSeat(popUpView);

                    if(listSeat.size() > 0)
                        setSelectedSeat(popUpView);
                }
            }
        });

    }

    public void setBookedList() {
        String list = "";
        for (SuatChieu suatChieu : curPhim.getSuatChieus()) {
            if (suatChieu.getNgay().equals(sNgayChieu.getSelectedItem().toString().trim()) && suatChieu.getSuatChieu().equals(sSuatChieu.getSelectedItem().toString().trim())) {
                list = suatChieu.getChoNgoi();
                break;
            }
        }
        listSeat.clear();
        booked.clear();
        for (String seat : list.split(";")) {
            if (seat.charAt(seat.length() - 1) == '1') {
                continue;
            }
            booked.add(seat.substring(0, 2));
        }
    }

    //Hàm này để xử lý checkbox seat khi check để chọn chỗ, thì lưu giá trị vào arraylist listSeat
    public void chonCho(View view)
    {
        boolean checked = ((CheckBox) view).isChecked();
        if(checked)
        {
            listSeat.add(((CheckBox) view).getText().toString());
            //booked.add(((CheckBox) view).getText().toString());
            Log.e("TAG",((CheckBox) view).getText().toString() + " added");
        }
        else
        {
            listSeat.remove(((CheckBox) view).getText().toString());
            Log.e("TAG",((CheckBox) view).getText().toString() + " removed");
        }

    }

    //Hàm này lấy arraylist từ db để xem ghế nào đã được chọn thì disable checkbox tại vị trí đó đi
    //Set theo text của checkbox
    public void setBookedSeat(View popUpView)
    {
        LinearLayout yourLayout= popUpView.findViewById(R.id.seatLayout);
        if(yourLayout != null)
        {
            //Log.e("TAG","Da tim duoc id layout");
            int count = yourLayout.getChildCount();
            for (int i = 0; i < count; i++) {
                View childLayout = yourLayout.getChildAt(i);
                if(childLayout instanceof  LinearLayout)
                {
                    //Log.e("TAG","Da tim duoc child layout");
                    int countChild = ((LinearLayout) childLayout).getChildCount();
                    for(int j = 0; j < countChild; j++)
                    {
                        View v = ((LinearLayout) childLayout).getChildAt(j);
                        if (v instanceof CheckBox)
                        {
                            for (String seat : booked)
                            {
                                if (((CheckBox) v).getText().toString().equals(seat))
                                {
                                    ((CheckBox) v).setButtonDrawable(R.drawable.ic_baseline_sentiment_very_dissatisfied_24);
                                    ((CheckBox) v).setClickable(false);
                                    //booked.remove(seat);
                                    break;
                                }
                            }
                        }
                    }
                }
            }

        }
        else
        {
            Log.e("TAG","khong tim duoc id layout");
        }
    }

    //Hàm này xử lý việc chọn lại ghế, lấy thông tin từ listSeat người dùng đã chọn, để setChecked sẵn
    public void setSelectedSeat(View popUpView)
    {
        LinearLayout yourLayout= popUpView.findViewById(R.id.seatLayout);
        if(yourLayout != null)
        {
            //Log.e("TAG","Da tim duoc id layout");
            int count = yourLayout.getChildCount();
            for (int i = 0; i < count; i++) {
                View childLayout = yourLayout.getChildAt(i);
                if(childLayout instanceof  LinearLayout)
                {
                    //Log.e("TAG","Da tim duoc child layout");
                    int countChild = ((LinearLayout) childLayout).getChildCount();
                    for(int j = 0; j < countChild; j++)
                    {
                        View v = ((LinearLayout) childLayout).getChildAt(j);
                        if (v instanceof CheckBox)
                        {
                            for (String seat : listSeat)
                            {
                                if (((CheckBox) v).getText().toString().equals(seat))
                                {
                                    ((CheckBox) v).setChecked(true);
                                    break;
                                }
                            }
                        }
                    }
                }
            }

        }
        else
        {
            Log.e("TAG","khong tim duoc id layout");
        }
    }

    private void initData() {
        String passData = getIntent().getStringExtra("passData");
        curPhim = new Phim(passData);

        aNgayChieu = new ArrayList<>();
        aSuatChieu = new ArrayList<>();

        if (curPhim == null) {
            return;
        } else if (curPhim.getSuatChieus() == null) {
            return;
        }

        tvTenPhimUpper.setText(curPhim.getTenPhim());
        Picasso.get().load(Network.getServerStorage() + curPhim.getPoster()).into(dvPoster);
        tvPhimDaChon.setText(curPhim.getTenPhim());
        tvGheDaChon.setText("");

        for(SuatChieu suatChieu : curPhim.getSuatChieus()) {
            if (aNgayChieu.contains(suatChieu.getNgay())) {
                continue;
            }
            aNgayChieu.add(suatChieu.getNgay());
        }
        Collections.sort(aNgayChieu);
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