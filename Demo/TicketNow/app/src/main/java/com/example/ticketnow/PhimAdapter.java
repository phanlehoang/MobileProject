package com.example.ticketnow;

import android.content.Context;
import android.content.Intent;
import android.net.Uri;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.ImageView;
import android.widget.TextView;

import java.util.List;

import androidx.annotation.NonNull;
import androidx.recyclerview.widget.RecyclerView;

import com.squareup.picasso.Picasso;

public class PhimAdapter extends RecyclerView.Adapter<PhimAdapter.PhimViewHolder> {
    public static class PhimViewHolder extends RecyclerView.ViewHolder{

        Context context;
        TextView tenPhim, theLoai, thoiLuong, rated, noiDung, daoDien;
        ImageView poster;
        Button btnDatVe, btnTrailer;
        PhimViewHolder(View itemView)
        {
            super(itemView);

            tenPhim = itemView.findViewById(R.id.tvTenPhim);
            theLoai = itemView.findViewById(R.id.tvTheLoaiPhim);
            thoiLuong =  itemView.findViewById(R.id.tvThoiLuong);
            rated =  itemView.findViewById(R.id.tvRated);
            noiDung =  itemView.findViewById(R.id.tvTomTat);
            poster =  itemView.findViewById(R.id.ivPoster);
            daoDien =  itemView.findViewById(R.id.tvDaoDien);
            btnDatVe = itemView.findViewById(R.id.btnDatVe);
            btnTrailer = itemView.findViewById(R.id.btnTrailer);
            context = itemView.getContext();
        }
    }
    List<Phim> phimList;

    PhimAdapter(List<Phim> phimList)
    {
        this.phimList = phimList;
    }

    @Override
    public int getItemCount()
    {
        return phimList.size();
    }

    @Override
    public PhimAdapter.PhimViewHolder onCreateViewHolder(ViewGroup viewGroup, int i) {
        View v = LayoutInflater.from(viewGroup.getContext()).inflate(R.layout.phim_layout, viewGroup, false);
        PhimAdapter.PhimViewHolder rvh = new PhimAdapter.PhimViewHolder(v);
        return rvh;
    }

    @Override
    public void onBindViewHolder(@NonNull  PhimAdapter.PhimViewHolder holder, int position) {
        holder.tenPhim.setText(phimList.get(position).getTenPhim());
        holder.theLoai.setText(phimList.get(position).getTheLoai());
        holder.thoiLuong.setText(phimList.get(position).getThoiLuong());
        holder.rated.setText(phimList.get(position).getDoTuoi());
        holder.noiDung.setText(phimList.get(position).getNoiDung());
        Picasso.get().load(Network.getServerStorage() + phimList.get(position).getPoster()).into(holder.poster);
        //holder.poster.setImageResource(phimList.get(position).getPoster());
        holder.daoDien.setText(phimList.get(position).getDaoDien());
        holder.btnTrailer.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Log.e("trailer", phimList.get(position).getTrailer());
                Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse(phimList.get(position).getTrailer()));
                intent.addFlags(Intent.FLAG_ACTIVITY_NEW_TASK);
                intent.setPackage("com.google.android.youtube");
                holder.context.startActivity(intent);
            }
        });
        holder.btnDatVe.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent intent = new Intent(holder.context, DatVe.class);
                String data = phimList.get(position).serialize();
                intent.putExtra("passData", data);
                holder.context.startActivity(intent);
            }
        });
    }

    @Override
    public void onAttachedToRecyclerView(RecyclerView recyclerView) {
        super.onAttachedToRecyclerView(recyclerView);
    }
}
