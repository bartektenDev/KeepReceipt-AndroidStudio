package theandroidguy.bart.keepreceipt;

import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.os.Environment;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.widget.ImageView;

public class Insert_Receipt_Info_Activity extends AppCompatActivity {

    ImageView scannedReceiptImageView;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_insert__receipt__info_);

        scannedReceiptImageView = findViewById(R.id.scannedReceiptTextureView);
        scannedReceiptImageView.setRotation(90);
        ReadScannedReceipt();
    }

    public void ReadScannedReceipt(){
        Bitmap bmp = BitmapFactory.decodeFile(Environment.getExternalStorageDirectory()+"/krsnapped.jpg");
        // set image to ImageView
        scannedReceiptImageView.setImageBitmap(bmp);
    }

    @Override
    protected void onResume() {
        super.onResume();
        Bitmap bmp = BitmapFactory.decodeFile(Environment.getExternalStorageDirectory()+"/krsnapped.jpg");
        // set image to ImageView
        scannedReceiptImageView.setImageBitmap(bmp);
    }

    @Override
    protected void onPause() {
        super.onPause();
    }
}
