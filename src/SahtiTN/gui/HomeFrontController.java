/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.services.Articles;
import SahtiTN.services.GestionArticles;
import SahtiTN.services.GestionCategories;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.embed.swing.SwingFXUtils;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.image.WritableImage;
import javafx.scene.layout.VBox;
import javax.imageio.ImageIO;

/**
 * FXML Controller class
 *
 * @author 21692
 */
public class HomeFrontController implements Initializable {

    @FXML
    private VBox pnItems;
    
 List<Articles> listarticles = new ArrayList<Articles>();
    List<Articles> listarticless = new ArrayList<Articles>();
    GestionArticles gstart = new GestionArticles();
    GestionCategories gstcat = new GestionCategories();
    Node[] nodes;


    public HomeFrontController() {
        this.pnItems = null;
    }
    
    
    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            Update();
        } catch (IOException ex) {
            Logger.getLogger(HomeFrontController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }    
    
    
    
    
    
      public void Update() throws IOException{
      // pnItems.getChildren().clear();
        Node[] nodess;
           listarticles = gstart.getArticlesPub();
          
        nodess = new Node[listarticles.size()];
    
         
            
        
        for (int i = 0; i < nodess.length  ; i++) {
            //System.out.println(i);
            try {

                final int j = i;
                /*URL url = new File("src/SahtiTN/gui/Item.fxml").toURI().toURL();
                nodes[i] = FXMLLoader.load(url);*/
                
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/ItemFront.fxml"));
                nodess[i] = loader.load();
             
            //Get controller of scene2
            AffichageArticleList Affich;
                Affich = loader.getController();
            //Pass whatever data you want. You can have multiple method calls here
           Affich.SetArticleTitle(listarticles.get(i).getTitre());
            String cat_nom = gstcat.getcatbyid(listarticles.get(i).getCat_id());
            Affich.SetArticleCategorie(cat_nom);
           // Affich.SetArticleVues(listarticles.get(i).getVues());
            Affich.SetArticleDescription(listarticles.get(i).getDescription());
            Affich.SetArticleContenu(listarticles.get(i).getContenu());
            Affich.SetArticleDate(listarticles.get(i).getDate());
            Affich.SetArticleID(listarticles.get(i).getId());
            Affich.SetArticleIDSup(listarticles.get(i).getId());
            
            
             File file = new File(listarticles.get(i).getImage());
                 BufferedImage bufferedImage = ImageIO.read(file);
                 WritableImage image = SwingFXUtils.toFXImage(bufferedImage, null);
                 Affich.setIconartic(image);
            
           
            
            
                
             
                
                
           
                //give the items some effect

                 nodess[i].setOnMouseEntered(event -> {
                    nodess[j].setStyle("-fx-background-color : #666666;-fx-background-radius: 1em;");
                });
                nodess[i].setOnMouseExited(event -> {
                    nodess[j].setStyle("-fx-background-color : #b5b5b5;-fx-background-radius: 1em;");
                });
                
                
                pnItems.getChildren().add(nodess[i]);
            } catch (IOException e) {
                e.printStackTrace();
            }
        }
       
    }
    
}
