package theandroidguy.bart.keepreceipt;


import android.app.ProgressDialog;
import android.os.Bundle;
import android.support.annotation.Nullable;
import android.support.v4.app.Fragment;
import android.support.v7.app.AppCompatActivity;
import android.support.v7.widget.DividerItemDecoration;
import android.support.v7.widget.LinearLayoutManager;
import android.support.v7.widget.RecyclerView;
import android.util.Log;
import android.view.LayoutInflater;
import android.view.View;
import android.view.ViewGroup;
import android.widget.ListAdapter;
import android.widget.ListView;
import android.widget.SimpleAdapter;
import android.widget.Toast;

import com.android.volley.RequestQueue;
import com.android.volley.Response;
import com.android.volley.VolleyError;
import com.android.volley.toolbox.JsonArrayRequest;
import com.android.volley.toolbox.Volley;

import org.json.JSONArray;
import org.json.JSONException;
import org.json.JSONObject;
import java.util.ArrayList;
import java.util.HashMap;
import java.util.List;

public class ListReceiptsActivity extends Fragment {

    private String url = "http://keepreceiptmail.online/test/receipts.json";

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
        final ProgressDialog progressDialog = new ProgressDialog(getActivity());
        progressDialog.setMessage("Loading...");
        progressDialog.show();

        Toast.makeText(getContext().getApplicationContext(), "Reading data", Toast.LENGTH_SHORT).show();
        try{
            ArrayList<HashMap<String, String>> userList = new ArrayList<>();
            ListView lv = getView().findViewById(R.id.mainList);
            String jsonStr = getListData();
            JSONObject jObj = new JSONObject(jsonStr);
            JSONArray jsonArry = jObj.getJSONArray("users");
            for(int i=0;i<jsonArry.length();i++){
                HashMap<String,String> user = new HashMap<>();
                JSONObject obj = jsonArry.getJSONObject(i);
                user.put("name",obj.getString("name"));
                user.put("designation",obj.getString("designation"));
                user.put("location",obj.getString("location"));
                userList.add(user);
            }
            ListAdapter adapter = new SimpleAdapter(getActivity(), userList, R.layout.list_row,new String[]{"name","designation","location"}, new int[]{R.id.name, R.id.designation, R.id.location});
            lv.setAdapter(adapter);
        }
        catch (JSONException ex){
            Log.e("JsonParser Example","unexpected JSON exception", ex);
            progressDialog.dismiss();
        }

        //adapter.notifyDataSetChanged();
        progressDialog.dismiss();
    }

    private String getListData() {
        String jsonStr = "{ \"users\" :[" +
                "{\"name\":\"Suresh Dasari\",\"designation\":\"Team Leader\",\"location\":\"Hyderabad\"}" +
                ",{\"name\":\"Rohini Alavala\",\"designation\":\"Agricultural Officer\",\"location\":\"Guntur\"}" +
                ",{\"name\":\"Trishika Dasari\",\"designation\":\"Charted Accountant\",\"location\":\"Guntur\"}] }";
        return jsonStr;
    }
}