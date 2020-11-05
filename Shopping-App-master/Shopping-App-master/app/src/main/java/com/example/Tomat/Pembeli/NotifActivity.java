package com.example.Tomat.Pembeli;

import android.content.Intent;
import android.os.Bundle;
import android.os.Handler;

import androidx.appcompat.app.AppCompatActivity;

import com.example.Tomat.R;

public class NotifActivity extends AppCompatActivity {
    private int waktu_loading=5000;

    //4000=4 detik

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_notification);
        new Handler().postDelayed(new Runnable() {
            @Override
            public void run() {

                //setelah loading maka akan langsung berpindah ke home activity
                Intent Home=new Intent(NotifActivity.this, HomeActivity.class);
                startActivity(Home);
                finish();

            }
        },waktu_loading);
    }
}
