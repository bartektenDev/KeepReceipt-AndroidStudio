package theandroidguy.bart.keepreceipt;

import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.graphics.drawable.Drawable;
import android.os.Environment;
import android.support.annotation.RequiresPermission;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ImageView;

import java.io.File;
import java.io.IOException;
import java.io.InputStream;

public class Insert_Receipt_Info_Activity extends AppCompatActivity {

    ImageView scannedReceiptImageView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_insert__receipt__info_);

        scannedReceiptImageView = findViewById(R.id.scannedReceiptImageView);

        ReadScannedReceipt();
    }

    public void ReadScannedReceipt(){
        Bitmap bmp = BitmapFactory.decodeFile(Environment.getExternalStorageDirectory() + File.separator + "picture.jpg");
        // set image to ImageView
        scannedReceiptImageView.setImageBitmap(bmp);
    }
}
