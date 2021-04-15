/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.NoteSoin;
import SahtiTN.entities.SoinMP;
import SahtiTN.services.SoinMPCrud;
import java.io.IOException;
import static java.lang.Math.round;
import java.net.URL;
import java.util.ArrayList;
import java.util.Collection;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TextArea;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.text.Text;
import javafx.scene.text.TextFlow;

/**
 * FXML Controller class
 *
 * @author LENOVO
 */
public class CarddetailsNoteController implements Initializable {
   SoinMP dataSoinMP;
    int userid=7;  
    float moyenne=0;
    String Avi="";
    int val=0;
    @FXML
    private ImageView moyenneImage;
    @FXML
    private Label titre;
    @FXML
    private TextFlow description;
    @FXML
    private Label adresse;
    @FXML
    private Label espace;
    @FXML
       private ComboBox<ImageView> Combo_Note;
  
    private final ImageView imagev1=new ImageView("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\1star.PNG");
     private ImageView imagev2=new ImageView("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\2star.PNG");
     private ImageView imagev3=new ImageView("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\3star.PNG");
     private ImageView imagev4=new ImageView("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\4star.PNG");
     private ImageView imagev5=new ImageView("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\5star.PNG");
      
     ObservableList<ImageView> Stars = FXCollections.observableArrayList();
    
    @FXML
    private Label espace2;
    @FXML
    public  ImageView noteImage;  
    @FXML
    private ImageView image;
    @FXML
    private TextArea Avis;
    @FXML
    private Button Submit_Avis;
    SoinMPCrud s=new SoinMPCrud();
      public void setDataSoinMP(SoinMP dataSoinMP) {
        this.dataSoinMP = dataSoinMP;
        image.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\Pi-dev\\ProjetPidev\\public\\uploads\\" + dataSoinMP.getLien_image_smp()));
        titre.setText(dataSoinMP.getTitre_soin_mp());
        description.getChildren().add(new Text(dataSoinMP.getDescription_soin_mp()));
        adresse.setText(dataSoinMP.getAdresse_soin_mp());

        Stars.addAll(imagev1,imagev2, imagev3, imagev4, imagev5);
        Combo_Note.setItems(Stars);
  
      
        espace.setId(Integer.toString(dataSoinMP.getId()));
        
        
          moyenne=s.MoyenneNotes(dataSoinMP.getId());
          System.out.println(moyenne);
        if (round(moyenne) ==0)
         {moyenneImage.setImage( new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\1star.PNG"));
         
         }
        if (round(moyenne) ==1)
         {moyenneImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\1star.PNG"));
         }
        if (round(moyenne) ==2)
         {moyenneImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\2star.PNG"));
         }
        if (round(moyenne) ==3)
         {moyenneImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\3star.PNG"));
         }
        if (round(moyenne) ==4)
         {moyenneImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\4star.PNG"));
         }
        if (round(moyenne) ==5)
         {moyenneImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\5star.PNG"));
         }
        NoteSoin noteSoinMP = s.getSoinMPNoteAvis(userid,dataSoinMP.getId());
        
        if (noteSoinMP!=null){
        val=noteSoinMP.getValeur();
        if(val==0)
        {
         noteImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\1star.PNG"));
        }
        if (val==1)
         {noteImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\1star.PNG"));
         }
        if (val ==2)
         {noteImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\2star.PNG"));
         }
        if (val ==3)
         {noteImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\3star.PNG"));
         }
        if (val ==4)
         {noteImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\4star.PNG"));
         }
        if (val ==5)
         {noteImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\5star.PNG"));
         }
        }else
         {noteImage.setImage(new Image("file:C:\\Users\\LENOVO\\Desktop\\pidev-java\\Pi-dev\\JavaApplication1\\src\\SahtiTN\\images\\stars\\1star.PNG"));
         }
        if(noteSoinMP!=null)
        {if(noteSoinMP.getAvis()!=null)
                {Avi=noteSoinMP.getAvis();
                }
        }
        Avis.setText(Avi);
       
        
        
    
      
      
      }
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void Envoi_Note(ActionEvent event) {
        
      
           System.out.print( Combo_Note.getSelectionModel().getSelectedIndex());
        try {
           
           AfficherSoinMPDetailsNoteController.sesoinId(espace.getId());           
           //récupération fichier fxml
           FXMLLoader loader = new FXMLLoader(getClass().getResource("AfficherSoinMPDetailsNote.fxml"));
           //récupération du root  à partir du fichier fxml
           
           Parent root = loader.load();
           //récupération du controller lier au fichier fxml
           
           AfficherSoinMPDetailsNoteController dpc = loader.getController();
           //   dpc.setLbMessage(id_table.getSelectionModel().getSelectedItem().getId() + "");
           espace.getScene().setRoot(root);
       } catch (IOException ex) {
           Logger.getLogger(CarddetailsNoteController.class.getName()).log(Level.SEVERE, null, ex);
       }

            
        
    }

    @FXML
    private void Envoi_Avis(ActionEvent event) {
    }
    
}
