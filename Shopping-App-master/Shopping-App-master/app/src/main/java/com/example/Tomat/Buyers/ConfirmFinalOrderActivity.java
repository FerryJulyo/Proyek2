package com.example.Tomat.Buyers;

import androidx.appcompat.app.AppCompatActivity;

import android.content.Intent;
import android.os.Bundle;
import android.text.TextUtils;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.Toast;

import com.example.Tomat.R;


import java.text.SimpleDateFormat;
import java.util.Calendar;
import java.util.HashMap;

public class ConfirmFinalOrderActivity extends AppCompatActivity {
    private EditText nameET, phoneET, addressET, cityET;
    private Button confirmOrderbtn;
    private String totalAmount = "";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        totalAmount = getIntent().getStringExtra("Total Price");

        setContentView(R.layout.activity_confirm_final_order);
        confirmOrderbtn = findViewById(R.id.confirm_order_btn);
        nameET = findViewById(R.id.shipment_name);
        phoneET = findViewById(R.id.shipment_phone_number);
        addressET = findViewById(R.id.shipment_address);
        cityET = findViewById(R.id.shipment_city);
        confirmOrderbtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                Intent notif = new Intent(ConfirmFinalOrderActivity.this, NotifActivity.class);
                check();
                startActivity(notif);
                finish();
            }
        });


    }

    private void check() {
        if (TextUtils.isEmpty(nameET.getText().toString())) {
            Toast.makeText(this, "Please Enter Your Name ", Toast.LENGTH_LONG).show();
        } else if (TextUtils.isEmpty(phoneET.getText().toString())) {
            Toast.makeText(this, "Please Enter Your Phone ", Toast.LENGTH_LONG).show();
        } else if (TextUtils.isEmpty(cityET.getText().toString())) {
            Toast.makeText(this, "Please Enter Your City ", Toast.LENGTH_LONG).show();
        } else (TextUtils.isEmpty(addressET.getText().toString())) {
            Toast.makeText(this, "Please Enter Your Address ", Toast.LENGTH_LONG).show();
        }
//        } else {
//            confirmOrder();
//        }
    }

//    private void confirmOrder() {
//        final String saveCurrentDate, saveCurrentTime;
//        Calendar calForDate = Calendar.getInstance();
//        SimpleDateFormat currentDate = new SimpleDateFormat("MMM DD, YYYY");
//        saveCurrentDate = currentDate.format(calForDate.getTime());
//        SimpleDateFormat currentTime = new SimpleDateFormat("HH:mm:ss a");
//        saveCurrentTime = currentTime.format(calForDate.getTime());
//
//
//        HashMap<String, Object> orderMap = new HashMap<>();
//        orderMap.put("totalAmount", totalAmount);
//        orderMap.put("name", nameET.getText().toString());
//        orderMap.put("phone", phoneET.getText().toString());
//        orderMap.put("date", saveCurrentDate);
//        orderMap.put("time", saveCurrentTime);
//        orderMap.put("city", cityET.getText().toString());
//        orderMap.put("address", addressET.getText().toString());
//        orderMap.put("state", "not shiped");
//
//
//
//    }
}
