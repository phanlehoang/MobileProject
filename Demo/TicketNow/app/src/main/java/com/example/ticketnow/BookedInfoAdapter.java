package com.example.ticketnow;

import android.app.AlertDialog;
import android.content.Context;
import android.content.DialogInterface;
import android.graphics.Bitmap;
import android.media.Image;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;
import android.widget.Toast;

import java.util.List;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import androidmads.library.qrgenearator.QRGContents;
import androidmads.library.qrgenearator.QRGEncoder;

public class BookedInfoAdapter extends RecyclerView.Adapter<BookedInfoAdapter.BookedInfoViewHolder>  {
    public static int dimension = 700;

    public static class BookedInfoViewHolder extends RecyclerView.ViewHolder{

        Context context;
        TextView tenPhim, cumRap, ngayGio, soGhe;
        Button btnDelete;
        View layout;
        BookedInfoViewHolder(View itemView)
        {
            super(itemView);
            layout = itemView;

            tenPhim = itemView.findViewById(R.id.infoTenPhim);
            cumRap = itemView.findViewById(R.id.infoTenRap);
            ngayGio =  itemView.findViewById(R.id.infoSuatChieu);
            soGhe =  itemView.findViewById(R.id.infoGheNgoi);
            btnDelete =  itemView.findViewById(R.id.btnDelete);

            context = itemView.getContext();
        }
    }

    List<BookedInfo> bookedInfoList;

    BookedInfoAdapter(List<BookedInfo> bookedInfoList)
    {
        this.bookedInfoList = bookedInfoList;
    }

    @Override
    public int getItemCount()
    {
        return bookedInfoList.size();
    }

    @Override
    public BookedInfoAdapter.BookedInfoViewHolder onCreateViewHolder(ViewGroup viewGroup, int i) {
        View v = LayoutInflater.from(viewGroup.getContext()).inflate(R.layout.info_layout, viewGroup, false);
        BookedInfoAdapter.BookedInfoViewHolder rvh = new BookedInfoAdapter.BookedInfoViewHolder(v);
        return rvh;
    }

    public void onBindViewHolder(@NonNull BookedInfoAdapter.BookedInfoViewHolder holder, int position) {
        holder.layout.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                QRGEncoder qrgEncoder = new QRGEncoder(bookedInfoList.get(position).getCode(), QRGContents.Type.TEXT, dimension);
                try {
                    Bitmap bitmap = qrgEncoder.getBitmap();
                    ImageView qrImage = new ImageView(holder.context);
                    qrImage.setImageBitmap(bitmap);
                    new AlertDialog.Builder(holder.context)
                            .setView(qrImage)
                            .setCancelable(true)
                            .show();
                } catch (Exception e) {
                    new AlertDialog.Builder(holder.context)
                            .setTitle("Oops")
                            .setMessage(e.getMessage())
                            .setNegativeButton("Cancel", new DialogInterface.OnClickListener() {
                                @Override
                                public void onClick(DialogInterface dialog, int which) {
                                    dialog.dismiss();
                                }
                            })
                            .show();
                }
            }
        });
        holder.tenPhim.setText(bookedInfoList.get(position).getTenPhim());
        holder.cumRap.setText("Rạp " + bookedInfoList.get(position).getCumRap());
        holder.ngayGio.setText(bookedInfoList.get(position).getNgayGio());
        holder.soGhe.setText("Số ghế: " + bookedInfoList.get(position).getSoGhe());
        //còn cái button delete chưa biết sao
        holder.btnDelete.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Request request = new Request(holder.context);
                request.deleteTicket(bookedInfoList.get(position).getId());
                bookedInfoList.remove(position);
                notifyDataSetChanged();
            }
        });
    }

    @Override
    public void onAttachedToRecyclerView(RecyclerView recyclerView) {
        super.onAttachedToRecyclerView(recyclerView);
    }
}
