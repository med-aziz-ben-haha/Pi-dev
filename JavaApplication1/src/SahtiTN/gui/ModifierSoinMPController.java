/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.SoinMP;
import SahtiTN.services.SoinMPCrud;
import SahtiTN.tools.Session;
import java.awt.image.BufferedImage;
import java.io.File;
import java.io.IOException;
import java.net.URL;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import java.util.ResourceBundle;
import java.util.UUID;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.embed.swing.SwingFXUtils;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javax.imageio.ImageIO;
import org.apache.commons.io.FilenameUtils;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class ModifierSoinMPController implements Initializable {
        public static int SoinId;

    public static int getSoinId() {
        return SoinId;
    }

    public static void setSoinId(int SoinId) {
        ModifierSoinMPController.SoinId = SoinId;
    }
    SoinMPCrud s = new SoinMPCrud();
    @FXML
    private Hyperlink btn_gestion_util;
    @FXML
    private Hyperlink btn_envoi_SoinMP;
    @FXML
    private Hyperlink btn_envoi_catSoinMP;
    @FXML
    private TextField titre;
    @FXML
    private Button btn_modifier;
    @FXML
    private Button btn_retour;
    @FXML
    private TextField Adresse;
    @FXML
    private TextField Description;
    @FXML
    private ComboBox<String> Categorie_soin;
    @FXML
    private Hyperlink btn_deconnexion;
  ObservableList<String> catSoin = FXCollections.observableArrayList();
    @FXML
    private ImageView CatImage;
    @FXML
    private Button btn_image;
     SoinMP soin = new SoinMP();
    @FXML
    private Hyperlink cat_Stat;
    @FXML
    private Hyperlink stat_soin;
    @FXML
    private Hyperlink rec;
    @FXML
    private Hyperlink gestion;
    @FXML
    private Hyperlink btnaccueil;
    @FXML
    private Hyperlink gestioncat;
    @FXML
    private Hyperlink btntags;
           
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        SoinMPCrud Soins = new SoinMPCrud();
        catSoin.addAll(Soins.cherchercattitres());
        Categorie_soin.setItems(catSoin);
        // TODO
        SoinMP soin= new SoinMP();
        titre.setText(Soins.afficherAideDetailsFront(SoinId).getTitre_soin_mp());
        Adresse.setText(Soins.afficherAideDetailsFront(SoinId).getAdresse_soin_mp());
       Description.setText(Soins.afficherAideDetailsFront(SoinId).getDescription_soin_mp());
        Categorie_soin.getSelectionModel().select(Soins.cherchercattitre(Soins.afficherAideDetailsFront(SoinId).getCategorie_soin_mp_id()));
       CatImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-mobile -integration\\Pi-dev\\ProjetPidev\\public\\uploads\\"+  s.afficherAideDetailsFront(SoinId).getLien_image_smp()));
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
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
     
        
    }
   
    @FXML
    private void navigation_affich(ActionEvent event) {
        
            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;
            
        try {
            root = loader.load();
      
            //récupération du controller lier au fichier fxml 
            AfficherSoinMPController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            btn_retour.getScene().setRoot(root);
              } catch (IOException ex) {
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
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
            Logger.getLogger(AjouterSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
      
    
    }
    
    @FXML
    private void btn_modifier(ActionEvent event) {
        try {
            String ch = Categorie_soin.getValue().toString();

            int id = s.chercherCatSoinMPid(ch);
            

            soin.setId(SoinId);
            soin.setCategorie_soin_mp_id(id);
            soin.setTitre_soin_mp(titre.getText());
            soin.setDescription_soin_mp(Description.getText());
            soin.setAdresse_soin_mp(Adresse.getText());
            if (soin.getLien_image_smp()==null)
            {soin.setLien_image_smp(s.afficherAideDetailsFront(SoinId).getLien_image_smp());
            }
            s.modifierSoinMP(soin);

            //récupération fichier fxml
            FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMP.fxml"));
            //récupération du root  à partir du fichier fxml
            Parent root;

            root = loader.load();
            //récupération du controller lier au fichier fxml 
            AfficherSoinMPController dpc = loader.getController();
            //             dpc.setLbMessage(id_act.getText());

            btn_modifier.getScene().setRoot(root);
        } catch (IOException ex) {
            Logger.getLogger(ModifierSoinMPController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void insert_image(ActionEvent event) {
           FileChooser fileChooser = new FileChooser();
        File selectedFile = fileChooser.showOpenDialog(new Stage());
                try {
                BufferedImage bufferedImage = ImageIO.read(selectedFile);
                Image image = SwingFXUtils.toFXImage(bufferedImage, null);
                CatImage.setImage(image);
                String uniqueid = UUID.randomUUID().toString();
                System.out.println("\n" + uniqueid);
                
                System.out.println(selectedFile.getPath());
                String extension= FilenameUtils.getExtension(selectedFile.getAbsolutePath());
              
                Path tmp = Files.move(Paths.get(selectedFile.getPath()),
                       Paths.get("C:\\Users\\LENOVO\\Desktop\\pidev-mobile -integration\\Pi-dev\\ProjetPidev\\public\\uploads\\"+uniqueid+"."+extension));
              System.out.print(tmp);
              
               
              soin.setLien_image_smp(uniqueid+"."+extension);
                
                } catch (IOException ex) {
                    System.out.print(ex.getMessage());
                
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
        FXMLLoader loader = new FXMLLoader(getClass().getResource("GestionReclamationBack.fxml"));
        try {
            Parent root = loader.load();
      GestionReclamationBackController apc = loader.getController();
           rec.getScene().setRoot(root);
        } catch (IOException ex) {
            System.out.println(ex.getMessage());
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
    private void handleClicks(ActionEvent event) throws IOException {
         if (event.getSource() == gestioncat) {
           

            FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/GestionCatego.fxml"));
            Parent root = loader.load();
             rec.getScene().setRoot(root);
        
        }

        if (event.getSource() == btntags) {

            FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/Gestiontags.fxml"));
            Parent root = loader.load();
             rec.getScene().setRoot(root);

        }
                 if (event.getSource() == btnaccueil) {
          

            FXMLLoader loader = new FXMLLoader(getClass().getResource("/SahtiTN/gui/Home.fxml"));
            Parent root = loader.load();
             rec.getScene().setRoot(root);

        }
    }

}
