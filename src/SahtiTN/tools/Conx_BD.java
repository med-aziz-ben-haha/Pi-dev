/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.tools;
import java.sql.*;
/**
 *
 * @author 21692
 */
public class Conx_BD {
    
    Connection con;
    
    public Conx_BD(){
    	 String user="root";
    	 String pass="";
    	 String url = "jdbc:mysql://localhost:3306/mydbjava";
    	
      try{
          Class.forName("com.mysql.cj.jdbc.Driver"); 
      }catch(ClassNotFoundException e){
          
          System.err.println(e); 
      }
      try{
          

          con=DriverManager.getConnection(url,user,pass);
          
      }catch(SQLException e){
          System.err.println(e);
      }
    }
    public Connection obtenirconnexion(){
        return con;
    }
    
}
