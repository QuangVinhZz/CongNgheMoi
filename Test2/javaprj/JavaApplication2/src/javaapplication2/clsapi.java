/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package javaapplication2;

import java.net.HttpURLConnection;
import java.net.URL;
import java.nio.charset.Charset;
import org.apache.commons.io.IOUtils;
import org.json.JSONArray;
import org.json.JSONTokener;

/**
 *
 * @author Admin
 */
public class clsapi {
    public JSONArray docapi(){
        try{
            String url = "http://localhost/Test2/api/xemsv.php";
            JSONArray jar = (JSONArray) new JSONTokener(IOUtils.toString(new URL(url).openStream(),Charset.forName("UTF-8"))).nextValue();
            return jar;
        }catch(Exception e){
            System.out.println("Loi ket noi api!");
            return null;
        }
    }
    
    public void geturl(String myurl){
        try{
            URL obj = new URL(myurl);
            HttpURLConnection con = (HttpURLConnection) obj.openConnection();
            con.setRequestMethod("GET");
            con.getResponseCode();     
        }catch(Exception e){
            
        }
    }
    
}
