/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author Nitesh Manandhar
 */
import java.awt.Toolkit;
import javax.swing.*;
public class icon extends JFrame{
 
   
     public void iconImg(){
         
        setIconImage(Toolkit.getDefaultToolkit().getImage(getClass().getResource("library.png")));
         
    }
}
