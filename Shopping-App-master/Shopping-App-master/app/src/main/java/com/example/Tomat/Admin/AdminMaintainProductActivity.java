package com.example.Tomat.Admin;

import androidx.appcompat.app.AppCompatActivity;

import android.os.Bundle;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Toast;

import com.example.Tomat.R;

import java.util.HashMap;

public class AdminMaintainProductActivity extends AppCompatActivity {
    private Button applyChangesbtn, deleteBtn;
    private ImageView imageView;
    private EditText name, price, description;
    private String productID = "";


    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_admin_maintain_product);
        productID = getIntent().getStringExtra("pid");
        applyChangesbtn = findViewById(R.id.apply_changes_btn);
        imageView = findViewById(R.id.product_image_maintain);
        imageView = findViewById(R.id.product_image_maintain);
        name = findViewById(R.id.product_name_maintain);
        price = findViewById(R.id.product_price_maintain);
        description = findViewById(R.id.product_discribtion_maintain);
        deleteBtn = findViewById(R.id.delete_btn);
        displayProductInfo();
        applyChangesbtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                applyChanges();
            }
        });
        deleteBtn.setOnClickListener(new View.OnClickListener() {
            @Override
            public void onClick(View v) {
                deleteThisProduct();
            }
        });


    }

    private void deleteThisProduct() {

    }

    private void applyChanges() {
        String pName = name.getText().toString();
        String pPrice = price.getText().toString();
        String pDescription = description.getText().toString();
        if (pName.equals("")) {
            Toast.makeText(AdminMaintainProductActivity.this, "Write Product Name", Toast.LENGTH_LONG).show();
        } else if (pPrice.equals("")) {
            Toast.makeText(AdminMaintainProductActivity.this, "Write Product Price", Toast.LENGTH_LONG).show();

        } else if (pDescription.equals("")) {
            Toast.makeText(AdminMaintainProductActivity.this, "Write Product Description", Toast.LENGTH_LONG).show();
        } else {
            HashMap<String, Object> productmap = new HashMap<>();
            productmap.put("pid", productID);
            productmap.put("description", pDescription);
            productmap.put("price", pPrice);
            productmap.put("pname", pName);

        }
    }

    private void displayProductInfo() {

    }

}
