package theandroidguy.bart.keepreceipt;


import android.content.Context;
import android.os.Bundle;
import android.os.Environment;
import android.support.annotation.Nullable;
import android.support.design.widget.Snackbar;
import android.support.v4.app.Fragment;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.Toast;

import org.apache.commons.lang3.StringUtils;
import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;

import java.io.BufferedReader;
import java.io.File;
import java.io.FileReader;
import java.io.IOException;
import java.io.OutputStreamWriter;
import java.util.ArrayList;
import java.util.HashMap;

public class ListReceiptsActivity extends Fragment {

    private String url = "http://keepreceiptmail.online/test/receipts.json";
    String jsonStr;

    @Nullable
    @Override
    public View onCreateView(LayoutInflater inflater, @Nullable ViewGroup container, @Nullable Bundle savedInstanceState) {

        return inflater.inflate(R.layout.list_receipts_activity, container, false);
    }

    @Override
    public void onViewCreated(View view, @Nullable Bundle savedInstanceState){
        super.onViewCreated(view, savedInstanceState);
        getData();
    }

    public void getData() {
        //final ProgressDialog progressDialog = new ProgressDialog(getActivity());
        //progressDialog.setMessage("Loading...");
        //progressDialog.show();
        File sdcard = Environment.getExternalStorageDirectory();
        //Get the text file
        File file = new File(sdcard,"Kreceipts.json");
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
            jsonStr = text.toString();
        }
        catch (IOException e) {
            //You'll need to add proper error handling here
        }

        Snackbar.make(getView(), "Listing receipts...", Snackbar.LENGTH_LONG).setAction("Action", null).show();
        try{
            ArrayList<HashMap<String, String>> userList = new ArrayList<>();
            ListView lv = getView().findViewById(R.id.mainList);
            JSONObject jObj = new JSONObject(jsonStr);
            JSONArray jsonArry = jObj.getJSONArray("receipts");
            for(int i=0;i<jsonArry.length();i++){
                HashMap<String,String> user = new HashMap<>();
                JSONObject obj = jsonArry.getJSONObject(i);
                user.put("store_name",obj.getString("store_name"));
                user.put("price_total",obj.getString("price_total"));
                user.put("category",obj.getString("category"));
                user.put("receiptImageLocationOnDevice",obj.getString("receiptImageLocationOnDevice"));
                userList.add(user);
            }
            ListAdapter adapter = new SimpleAdapter(getActivity(), userList, R.layout.list_row,new String[]{"store_name","price_total","category","locationOfPic"}, new int[]{R.id.store_name, R.id.price_total, R.id.category, R.id.location});
            lv.setAdapter(adapter);
        }
        catch (JSONException ex){
            Log.e("Listing receipts failed","unexpected exception", ex);
            //progressDialog.dismiss();
        }

        //adapter.notifyDataSetChanged();
        //progressDialog.dismiss();
    }

}