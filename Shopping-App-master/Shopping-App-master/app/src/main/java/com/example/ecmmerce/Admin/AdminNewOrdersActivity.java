package com.example.ecmmerce.Admin;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AlertDialog;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.content.DialogInterface;
import android.content.Intent;
import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.Button;
import android.widget.TextView;

import com.example.ecmmerce.Model.AdminOrders;
import com.example.ecmmerce.R;


public class AdminNewOrdersActivity extends AppCompatActivity {
    private RecyclerView orderList;



    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_admin_new_orders);
        orderList = findViewById(R.id.order_list);
        orderList.setLayoutManager(new LinearLayoutManager(this));

    }

    @Override
    protected void onStart() {
        super.onStart();

    }

    private void removeOrder(String uid) {


    }

    public static class AdminOrdersViewHolder extends RecyclerView.ViewHolder {
        public TextView username, userphone, usertotalprice, userDateTime, useraddress;
        public Button showOrderBtn;

        public AdminOrdersViewHolder(@NonNull View itemView) {
            super(itemView);

            username = itemView.findViewById(R.id.order_user_name);
            userphone = itemView.findViewById(R.id.order_phone_number);
            usertotalprice = itemView.findViewById(R.id.order_total_price);
            userDateTime = itemView.findViewById(R.id.order_date_time);
            useraddress = itemView.findViewById(R.id.order_address_city);
            showOrderBtn = itemView.findViewById(R.id.show_product);


        }
    }
}
