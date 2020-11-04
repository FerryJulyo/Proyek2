package com.example.ecmmerce.Admin;

import androidx.annotation.NonNull;
import androidx.appcompat.app.AppCompatActivity;
import androidx.recyclerview.widget.LinearLayoutManager;
import androidx.recyclerview.widget.RecyclerView;

import android.os.Bundle;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;

import com.example.ecmmerce.Model.Cart;
import com.example.ecmmerce.R;
import com.example.ecmmerce.ViewHolder.CartViewHolder;


public class AdminUserProductActivity extends AppCompatActivity {
    private RecyclerView productList;
    RecyclerView.LayoutManager layoutManager;
    private String userId = "";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_admin_user_product);
        userId = getIntent().getStringExtra("uid");
        productList = findViewById(R.id.products_list);
        productList.setHasFixedSize(true);
        layoutManager = new LinearLayoutManager(this);
        productList.setLayoutManager(layoutManager);



    }

    @Override
    protected void onStart() {
        super.onStart();

    }
}
