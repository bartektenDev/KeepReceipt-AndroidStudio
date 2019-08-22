package theandroidguy.bart.keepreceipt;

import android.content.Context;
import android.graphics.Bitmap;
import android.graphics.BitmapFactory;
import android.os.Environment;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.util.Log;
import android.view.View;
import android.widget.Button;
import android.widget.EditText;
import android.widget.ImageView;
import android.widget.Toast;

import org.apache.commons.lang3.StringUtils;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.FileReader;
import java.io.IOException;
import java.io.OutputStreamWriter;
import java.util.Calendar;
import java.util.Date;

public class Insert_Receipt_Info_Activity extends AppCompatActivity {

    ImageView scannedReceiptImageView;
    Button Addreceipt;

    String entireJSONreceiptsSTR = "";
    String existingReceipts, generatedReceiptImageID;

    EditText StoreName, TotalPrice, Date, Time, CategoryText;

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        super.onCreate(savedInstanceState);
        setContentView(R.layout.activity_insert__receipt__info_);

        Date currentTime = Calendar.getInstance().getTime();
        Toast.makeText(getApplicationContext(), ""+currentTime.toString(), Toast.LENGTH_SHORT).show();

        StoreName = findViewById(R.id.brandOfStoreInput);
        TotalPrice = findViewById(R.id.amountInput);
        Date = findViewById(R.id.dateOfReceipt);
        //Time00
        CategoryText = findViewById(R.id.categoryText);

        Addreceipt = findViewById(R.id.addReceiptBtn);

        scannedReceiptImageView = findViewById(R.id.scannedReceiptTextureView);
        scannedReceiptImageView.setRotation(90);
        ReadScannedReceipt();
    }

    public void ReadScannedReceipt(){
        Bitmap bmp = BitmapFactory.decodeFile(Environment.getExternalStorageDirectory()+ "/" + generatedReceiptImageID + ".jpg");
        // set image to ImageView
        scannedReceiptImageView.setImageBitmap(bmp);
        firstReceiptCheck();
    }

    public void firstReceiptCheck(){
        File receiptsFile = Environment.getExternalStorageDirectory();
        //Get the text file
        File file = new File(receiptsFile,"Kreceipts.json");
        if(file.exists()){
            ReadandWriteReceiptsJSON();
        }else{
            //create new file
            firstReceiptMake();
        }
    }

    public void ReadandWriteReceiptsJSON(){
        //read the JSON receipts file and take it apart so that we have it prepared to add the next receipt
        File sdcard = Environment.getExternalStorageDirectory();

        //Get the text file
        final File file = new File(sdcard,"Kreceipts.json");

        //Read text from file
        StringBuilder text = new StringBuilder();

        try {
            BufferedReader br = new BufferedReader(new FileReader(file));
            String line;

            while ((line = br.readLine()) != null) {
                text.append(line);
                text.append('\n');
            }
            br.close();

            existingReceipts = StringUtils.substringBetween(text.toString(), ":[", "]}");

            Toast.makeText(getApplicationContext(), existingReceipts, Toast.LENGTH_SHORT).show();

            //enable the add receipt button once the system is ready to apply all settings and all other background processes are complete
            Addreceipt.setOnClickListener(new View.OnClickListener() {
                @Override
                public void onClick(View v) {
                    Addreceipt.setEnabled(false);
                    //now we save the data in this activity and then apply the new data to the receipts.json file
                    String ext_storage_state = Environment.getExternalStorageState();
                    File mediaStorage = new File(Environment.getExternalStorageDirectory()
                            + "/Folder name");
                    if (ext_storage_state.equalsIgnoreCase(Environment.MEDIA_MOUNTED)) {
                        if (!mediaStorage.exists()) {
                            mediaStorage.mkdirs();
                        }
                        //write file writing code..
                        String mycontent = "{\"receipts\":[" + "{\n" +
                                "         \"store_name\":\""+ StoreName.getText() +"\",\n" +
                                "         \"store_address\":\"\",\n" +
                                "         \"store_phone_number\":\"\",\n" +
                                "         \"date\":\""+ Date.getText() +"\",\n" +
                                "         \"time\":\"1:34 PM\",\n" +
                                "         \"server_person\":\"\",\n" +
                                "         \"subtotal\":\"\",\n" +
                                "         \"tax\":\"\",\n" +
                                "         \"price_total\":\""+ TotalPrice.getText() +"\",\n" +
                                "         \"category\":\""+CategoryText.getText()+"\",\n" +
                                "         \"receiptImageLocationOnDevice\":\""+Environment.getExternalStorageDirectory().toString()+"\",\n" +
                                "         \"end\":\"endreceipt\"\n" +
                                "}," + existingReceipts + "]}";
                        try {
                            FileOutputStream fos = new FileOutputStream(Environment.getExternalStorageDirectory()
                                    + "/Kreceipts.json");
                            try {
                                byte[] bytesArray = mycontent.getBytes();
                                fos.write(bytesArray);
                                fos.close();
                            } catch (IOException e) {
                                // TODO Auto-generated catch block
                                e.printStackTrace();
                            }
                        } catch (FileNotFoundException e) {
                            // TODO Auto-generated catch block
                            e.printStackTrace();
                        }
                    }
                    else
                    {
                        //Toast message sd card not found..
                    }
                }
            });
        }
        catch (IOException e) {
            //You'll need to add proper error handling here
        }

    }

    public void firstReceiptMake(){
        try {
            OutputStreamWriter outputStreamWriter = new OutputStreamWriter(getApplicationContext().openFileOutput("Kreceipts.json", Context.MODE_PRIVATE));
            outputStreamWriter.write("test");
            outputStreamWriter.close();
            finish();
        }
        catch (IOException e) {
            Log.e("Exception", "File write failed: " + e.toString());
        }
        Toast.makeText(getApplicationContext(), "written", Toast.LENGTH_SHORT).show();
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
