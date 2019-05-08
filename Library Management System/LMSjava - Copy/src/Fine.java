
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.text.SimpleDateFormat;
import java.util.Date;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Nitesh Manandhar
 */
public class Fine {
    String I_ID="";
Connection conn;
PreparedStatement pst,pst1,pst2,pst3,PstFine;
ResultSet rs,rs1,rs2,rs3,rsFine;
int Amnt=0;

public static void main(String[]args) throws SQLException{
    new Fine();
    
}
    
    Fine() throws SQLException {
{
        
        conn = javaconnect.ConnecrDB();
        String get ="Select * from FineAmnt where SN = ?";
        PstFine = conn.prepareStatement(get);
        PstFine.setString(1,"1");
        rsFine = PstFine.executeQuery();
        if(rsFine.next()){
            Amnt =  rsFine.getInt(2);
        }
        
        Date currentDate = new Date();
        Date limitDate ;
        Date excessDate ;
        
        //System.out.println(currentDate);
        
        String st = "MMM d, yyyy";
        
        SimpleDateFormat sdf = new SimpleDateFormat(st);
        String cDate = sdf.format(currentDate);
          
        ///////////////////
        
             
        
        //////////////////////
        
        
        try{
       String First = "Select * from Issue";
       pst = conn.prepareStatement(First);
       rs =pst.executeQuery();
        
        while(rs.next()){
            I_ID=rs.getString(1);
            
            
            String lDate = rs.getString(11);
            
            limitDate = sdf.parse(lDate);
            
         // System.out.println(lDate);
         
          //   System.out.println(I_ID);
             
             
            if(currentDate.after(limitDate)){
                
               long difference = currentDate.getTime() - limitDate.getTime();
	       float excessDays = (difference / (1000*60*60*24));
                
               int fineAmount =(int)excessDays *Amnt;
                
           //    System.out.println(currentDate);
           //    System.out.println(limitDate);
               //////////////////////////////////////////////
               
               
            //   System.out.println(fineAmount); 
              // System.out.println(excessDays);
              // System.out.println(I_ID);
               
                
                
                ////////////////////////
                
                    String check = "Select * from fine where Issue_ID=?";
                    pst2 = conn.prepareStatement(check);
                    pst2.setString(1,rs.getString(1));
                    rs2=pst2.executeQuery();
                    if(rs2.next()){
                         //System.out.println(rs.getString(1)+"\n"+ I_ID);
                       String Update = "Update Fine set FineAmount = ? where Issue_ID=?";
                       pst3 = conn.prepareStatement(Update);
                       pst3.setString(1,Integer.toString(fineAmount));
                       pst3.setString(2,rs.getString(1));
                       
                       int res = pst3.executeUpdate();
                      // if(res>0){
                          // System.out.println("DONE");
                     // }
                       
                    }else{
                        String last = "Insert into Fine(Issue_ID,Book_ID,Book_Name,P_ID,First_Name,Phone_No,DateOfIssue,LimitDate,FineAmount)Values(?,?,?,?,?,?,?,?,?)";
                pst1 = conn.prepareStatement(last);
                
                pst1.setString(1,rs.getString(1));
                pst1.setString(2,rs.getString(2));
                pst1.setString(3,rs.getString(3));
                
                pst1.setString(4,rs.getString(5));
                pst1.setString(5,rs.getString(6));
                
                pst1.setString(6,rs.getString(9));
                
                
                
                pst1.setString(7,rs.getString(10));
                
                pst1.setString(8,rs.getString(11));
                
                ;
                
                pst1.setString(9,Integer.toString(fineAmount));
                
                
                pst1.executeUpdate();
                    }
                    
                    
                
            }
        }
        
        }catch(Exception e){
        
        }
    }
        
    }
}
