package SahtiTN.gui;

import SahtiTN.entities.Articles;
import SahtiTN.entities.Categories;
import SahtiTN.entities.Tags;
import SahtiTN.services.GestionArticles;
import SahtiTN.services.GestionCategories;
import SahtiTN.services.GestionTags;
import SahtiTN.tools.Session;
import java.awt.AWTException;
import java.awt.SystemTray;
import java.awt.Toolkit;
import java.awt.TrayIcon;
import java.awt.image.BufferedImage;
import java.io.File;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Button;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.HBox;
import javafx.scene.layout.Pane;
import javafx.scene.layout.VBox;

import java.io.IOException;
import java.net.MalformedURLException;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.application.Platform;
import javafx.beans.value.ObservableValue;
import javafx.embed.swing.SwingFXUtils;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.image.WritableImage;
import javafx.stage.Stage;
import javax.imageio.ImageIO;

public class Recherchetags implements Initializable {

    @FXML
    private VBox pnItems = null;
    
    
    
    @FXML
    private Button Ajout;
    
    @FXML
    private Hyperlink btnaccueil;

   

    @FXML
    private Hyperlink gestioncat;
    
    @FXML
    private Button recherchebtn;
    
    
    
     @FXML
     private TextField recherche;
    
     
     
     private Label nbrcatlabel;
      
          
    @FXML
    private Button accueil;
      
    
     @FXML
    private Hyperlink btntags;
      
    /*@FXML
    private Button pnlMenus;

    @FXML
    private Button btnPackages;

    @FXML
    private Button btnSettings;

    @FXML
    private Button btnSignout;

   

    

   
*/
    
    
  public static String terme;

    public static String getTerme() {
        return terme;
    }

    public static void setTerme(String terme) {
        Recherchetags.terme = terme;
    }
  boolean modifint = false;
  boolean erreurrech = true;


    List<Tags> listTags = new ArrayList<Tags>();
    GestionTags gsttagglobal = new GestionTags();
    GestionTags gsttag = new GestionTags();
    Node[] nodes;
    @FXML
    private Label nbrtaglabel;
    @FXML
    private Hyperlink btn_gestion_util;
    @FXML
    private Hyperlink btn_envoi_SoinMP;
    @FXML
    private Hyperlink btn_envoi_catSoinMP;
    @FXML
    private Hyperlink cat_Stat;
    @FXML
    private Hyperlink stat_soin;
    @FXML
    private Hyperlink rec;
    @FXML
    private Hyperlink gestion;
    @FXML
    private Hyperlink btn_deconnexion;

    
    
    
    
    
    
    
    
    
    
    
    
    
    

    @Override
    public void initialize(URL location, ResourceBundle resources) {
        
        
        
        
        
        
       
       
       

    recherche.textProperty().addListener((ObservableValue<? extends String> observable, String oldValue, String newValue) -> {
       if(newValue.trim().isEmpty()){
                recherche.setStyle("-fx-border-color :#ff4242;");
            }else if(newValue.length() < 3){
                
                recherche.setStyle("-fx-border-color :#ff4242;");
            }else{
                erreurrech = false;
                this.terme = newValue;
                recherche.setId(newValue);
                System.out.println(recherche.getId());
                recherche.setStyle("-fx-background-radius: 0em ;");            } } );

        try {
            handleRecherche(terme);
            
        } catch (IOException ex) {
            Logger.getLogger(Recherchetags.class.getName()).log(Level.SEVERE, null, ex);
        }
      
       
       
       
       
       
       
       
       
       
       
       
        

    }


    @FXML
    public void handleClicks(ActionEvent actionEvent) throws IOException {
        if (actionEvent.getSource() == gestioncat) {
              Stage stage = (Stage) recherchebtn.getScene().getWindow();
                  
                   FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/GestionCatego.fxml"));
        Parent root = loader.load();
        Scene scene = new Scene(root);
        stage.setScene(scene);  
        }
            
            
      if (actionEvent.getSource() == btntags) {
              Stage stage = (Stage) btntags.getScene().getWindow();
                  
                   FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/Gestiontags.fxml"));
        Parent root = loader.load();
        Scene scene = new Scene(root);
        stage.setScene(scene);  
        }
        
        if (actionEvent.getSource() == btnaccueil) {
          Stage stage = (Stage) recherchebtn.getScene().getWindow();
                  
                   FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/Gestiontags.fxml"));
        Parent root = loader.load();
         Scene scene = new Scene(root);
        stage.setScene(scene); 
        }
        if(actionEvent.getSource()==Ajout)
        {
            ScrollPane sp = new ScrollPane();
 FXMLLoader loader = new FXMLLoader(getClass().getResource("AjouterTag.fxml"));
         
            Parent root = loader.load();
         

            btn_gestion_util.getScene().setRoot(root);
            
        }
       if(actionEvent.getSource()==recherchebtn)
        {
         
            if(this.terme != null && !erreurrech){
               Stage stage = (Stage) recherchebtn.getScene().getWindow();
                  
                   FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/RechercheTags.fxml"));
        Parent root = loader.load();
        Recherchetags rech;
                rech = loader.getController();
                rech.handleRecherche(this.terme);
        Scene scene = new Scene(root);
        stage.setScene(scene);  
            }else{
                try {
                this.displayTray("Minimum 3 caracteres !!!");
            } catch (AWTException ex) {
                Logger.getLogger(AjoutArticle.class.getName()).log(Level.SEVERE, null, ex);
            }
            }
            
            
            
                  
            
        }
        
      
        
        
    }
    


    
    
    
    
    
    
    
    public void Update() throws IOException{
      // pnItems.getChildren().clear();
        Node[] nodess;
           listTags = gsttag.getTags();
          
        nodess = new Node[listTags.size()];
    
         
            
        
       for (int i = 0; i < nodess.length  ; i++) {
            //System.out.println(i);
            try {

                final int j = i;
                /*URL url = new File("src/SahtiTN/gui/Item.fxml").toURI().toURL();
                nodes[i] = FXMLLoader.load(url);*/
                
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/ItemTags.fxml"));
                nodess[i] = loader.load();
             
            //Get controller of scene2
            AffichagetagsList Affich;
                Affich = loader.getController();
            //Pass whatever data you want. You can have multiple method calls here
            
           
            
          Affich.SettagTitle(listTags.get(i).getNom());
          
          Affich.SetTagIDSup(listTags.get(i).getId());
          Affich.SetTagID(listTags.get(i).getId());
                
               
           
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
    
    
 


       public void displayTray(String msg) throws AWTException {
        //Obtain only one instance of the SystemTray object
        SystemTray tray = SystemTray.getSystemTray();

       
        java.awt.Image image = Toolkit.getDefaultToolkit().createImage("/SahtiTN/images/how-to-edit-a-png-image-1.png");
       
        TrayIcon trayIcon = new TrayIcon(image, "Recherche");
        //Let the system resize the image if needed
        trayIcon.setImageAutoSize(true);
        //Set tooltip text for the tray icon
        //trayIcon.setToolTip("System tray icon demo");
        tray.add(trayIcon);

        trayIcon.displayMessage("Recherche", msg, TrayIcon.MessageType.ERROR);
    }     
       
       
    
       public void handleRecherche(String terme) throws IOException{
      // pnItems.getChildren().clear();
        Node[] nodess;
           listTags = gsttagglobal.getTagsSearch(terme);
         nodess = new Node[listTags.size()];
    
         
            
        
        for (int i = 0; i < nodess.length  ; i++) {
            //System.out.println(i);
            try {

                final int j = i;
                /*URL url = new File("src/SahtiTN/gui/Item.fxml").toURI().toURL();
                nodes[i] = FXMLLoader.load(url);*/
                
                FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/ItemTags.fxml"));
                nodess[i] = loader.load();
             
            //Get controller of scene2
            AffichagetagsList Affich;
                Affich = loader.getController();
            //Pass whatever data you want. You can have multiple method calls here
            
           
            
             
          Affich.SettagTitle(listTags.get(i).getNom());
          
          Affich.SetTagIDSup(listTags.get(i).getId());
          Affich.SetTagID(listTags.get(i).getId());
                
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
    
    @FXML
      public void retouraccu() throws MalformedURLException, IOException{
         Stage stage = (Stage) accueil.getScene().getWindow();
        URL url = new File("src/SahtiTN/gui/Gestiontags.fxml").toURI().toURL();
        Parent root = FXMLLoader.load(url);
         Scene scene = new Scene(root);
        stage.setScene(scene);
    } 

    @FXML
    private void evoi_gestion_util(ActionEvent event) {
          try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherUser.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml
            AfficherUserController dpc = loader.getController();
            //   dpc.setLbMessage(id_tableUser.getSelectionModel().getSelectedItem().getId() + "");

            btn_gestion_util.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_SoinMP(ActionEvent event) {
         try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml
            AfficherSoinMPController dpc = loader.getController();
            //   dpc.setLbMessage(id_tableUser.getSelectionModel().getSelectedItem().getId() + "");

            btn_envoi_SoinMP.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_catSoinMP(ActionEvent event) {
        try {
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherCategorieSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root = loader.load();
            //récupération du controller lier au fichier fxml
            AfficherCategorieSoinMPController dpc = loader.getController();
            //   dpc.setLbMessage(id_tableUser.getSelectionModel().getSelectedItem().getId() + "");

            btn_envoi_catSoinMP.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_cat_Stat(ActionEvent event) {
         try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("StatCatSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;

            root = loader.load();
            //récupération du controller lier au fichier fxml 
            StatCatSoinMPController dpc = loader.getController();

            cat_Stat.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void envoi_statSoin(ActionEvent event) {
          try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("StatSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;

            root = loader.load();
            //récupération du controller lier au fichier fxml 
            StatSoinMPController dpc = loader.getController();

            stat_soin.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(AfficherCategorieSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void recOnAction(ActionEvent event) {
         try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionReclamationBack.fxml"));
            
            Parent root = loader.load();
            rec.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void gestionTypeAction(ActionEvent event) {
           try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionTypeReclamationBack.fxml"));
            
            Parent root = loader.load();
            rec.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
    }

    @FXML
    private void sedeconnecter(ActionEvent event) {
                Session.getSession().clearSession();
       try {
            FXMLLoader loader = new FXMLLoader(getClass().getResource("Connexion.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            
            
            root = loader.load();
            //récupération du controller lier au fichier fxml 
            SahtiTN.gui.ConnexionController dpc = loader.getController();

            btn_deconnexion.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(HomepageBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    
    
    
    
}
