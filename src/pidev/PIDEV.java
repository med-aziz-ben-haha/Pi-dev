/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package pidev;

import SahtiTN.gui.Controller;
import SahtiTN.gui.HomeFrontController;

import java.io.File;

import java.net.URL;
import javafx.application.Application;
import static javafx.application.Application.launch;

import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.image.Image;
import javafx.stage.Stage;

/**
 *
 * @author 21692
 */
public class PIDEV extends Application {
    
    private double x, y;
    
    @Override
    public void start(Stage primaryStage) throws Exception {
        /*     
        //back
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTn/gui/Home.fxml"));
        Parent root = loader.load();
         Controller contr;
                contr = loader.getController();
       */  
       
      
        //front
        FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/HomeFront.fxml"));
        Parent root = loader.load();
         HomeFrontController contr;
                contr = loader.getController();
         
          
        primaryStage.getIcons().add(new Image("/SahtiTN/images/Logo.jpeg"));
        primaryStage.setTitle("Gestion de Blog");
        Scene scene = new Scene(root);
        
      

       // primaryStage.initStyle(StageStyle.UNDECORATED);

        //drag it here
        root.setOnMousePressed(event -> {
            x = event.getSceneX();
            y = event.getSceneY();
        });
        root.setOnMouseDragged(event -> {

            primaryStage.setX(event.getScreenX() - x);
            primaryStage.setY(event.getScreenY() - y);

        });
        
        
        
        
        

        
        
        
        
        
        
        
        
        
        
        primaryStage.setScene(scene);
        primaryStage.show();
    }
    
    
    
  
    
    
    
    
    
    

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }
    
}
