/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;

/**
 *
 * @author LENOVO
 */
public class SahtiTn extends Application {
    
    @Override
    public void start(Stage stage) throws Exception  {
         
       
            Parent root = FXMLLoader.load(getClass().getResource("HomePageBack.fxml"));
            //Parent root = FXMLLoader.load(getClass().getResource("LABOFRONT.fxml"));
            //Parent root = FXMLLoader.load(getClass().getResource("HomePageFront.fxml"));

            //Parent root = FXMLLoader.load(getClass().getResource("specialiteLaboBack.fxml"));
            
            //Parent root = FXMLLoader.load(getClass().getResource("FXMLAdherent.fxml"));
            
          
            Scene scene = new Scene(root);
            stage.setScene(scene);
            stage.show();
         
}


    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
       
        launch(args);
    }
    
}
