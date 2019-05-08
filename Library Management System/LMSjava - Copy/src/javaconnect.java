
import java.sql.*;
import javax.swing.JOptionPane;
public class javaconnect {
    static Connection conn;
    
    public static Connection ConnecrDB(){
        try{
            //Class.forName("com.mysql.jdbc.Driver");
            conn = DriverManager.getConnection("jdbc:mysql://localhost:3306/library","root","");
            return conn;
        }catch(Exception e){
            JOptionPane.showMessageDialog(null,e);
            return null;
        }
        
    }
}
