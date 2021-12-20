package com.example.ticketnow;

import android.content.Context;
import android.net.Uri;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ImageView;
import android.widget.TextView;

import java.util.List;

import androidx.annotation.NonNull;
import androidx.cardview.widget.CardView;
import androidx.recyclerview.widget.RecyclerView;

import com.bumptech.glide.Glide;
import com.squareup.picasso.Picasso;

public class CumRapAdapter extends RecyclerView.Adapter<CumRapAdapter.CumRapViewHolder> {

    public static class CumRapViewHolder extends RecyclerView.ViewHolder{
        CardView cv;
        TextView id, name;
        ImageView photo, background;
        Context context;
        CumRapViewHolder(View itemView)
        {
            super(itemView);
            cv = itemView.findViewById(R.id.cv);
            id = itemView.findViewById(R.id.rapID);
            name = itemView.findViewById(R.id.rapName);
            photo =  itemView.findViewById(R.id.rapPhoto);
            background =  itemView.findViewById(R.id.rapBackground);
            context = itemView.getContext();
        }


    }
    List<CumRap> cumRapList;

    CumRapAdapter(List<CumRap> cumRapList){
        this.cumRapList = cumRapList;
    }

    @Override
    public int getItemCount()
    {
        return cumRapList.size();
    }

    @Override
    public CumRapViewHolder onCreateViewHolder(ViewGroup viewGroup, int i) {
        View v = LayoutInflater.from(viewGroup.getContext()).inflate(R.layout.card_view_layout, viewGroup, false);
        CumRapViewHolder rvh = new CumRapViewHolder(v);
        return rvh;
    }

    @Override
    public void onBindViewHolder(@NonNull CumRapViewHolder holder, int position) {
        holder.cv.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Homepage.pickCumRap(position, cumRapList.get(position).getName());
            }
        });
        holder.id.setText(cumRapList.get(position).diachi);
        holder.name.setText(cumRapList.get(position).name);
        Picasso.get().load(Network.getServerStorage() + cumRapList.get(position).image).into(holder.photo);
        Picasso.get().load(Network.getServerStorage() + cumRapList.get(position).background).into(holder.background);
    }

    @Override
    public void onAttachedToRecyclerView(RecyclerView recyclerView) {
        super.onAttachedToRecyclerView(recyclerView);
    }
}
