/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package SahtiTN.gui;

import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.Initializable;


import SahtiTN.entities.labo;
import SahtiTN.services.servicelabo;
import SahtiTN.entities.specialitelabo;
import SahtiTN.services.servicespecialitelabo;
import SahtiTN.tools.MyConnection;
import java.io.IOException;
import java.net.URL;
import java.sql.PreparedStatement;
import java.sql.SQLException;
import static java.util.Collections.list;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.collections.transformation.FilteredList;
import javafx.collections.transformation.SortedList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import static javafx.util.Duration.seconds;
import tray.notification.NotificationType;
import tray.notification.TrayNotification;



/**
 * FXML Controller class
 *
 * @author oussama
 */
public class FXMLLABOController implements Initializable {

    @FXML
    private Button btn_aj;
    @FXML
    private Button btn_supp;
    @FXML
    private Button btn_modif;
    @FXML
    private TableView<labo> tab_lab;
    @FXML
    private TableColumn<labo, Integer> Col_id_l;
    @FXML
    private TableColumn<labo, String> Col_nom_l;
    @FXML
    private TableColumn<labo, String> Col_adr_l;
    @FXML
    private TableColumn<labo, String> Col_tel_l;
    @FXML
    private TableColumn<labo, String> Col_email_l;
    @FXML
    private TableColumn<labo, String> Col_spec_l;
    @FXML
    private TextField txt_nom_l;
    @FXML
    private TextField txt_id_l;
    @FXML
    private TextField txt_email_l;
    @FXML
    private TextField txt_adr_l;
    @FXML
    private TextField txt_tel_l;
    private TextField txt_spec_l;
    @FXML
    private TextField rechtype;
    private ComboBox combo_spec;
    ObservableList<String> catSpec = FXCollections.observableArrayList();
    @FXML
    private ComboBox<String> Combo_spec;

   
    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
        txt_id_l.setVisible(false);
        Col_id_l.setVisible(false);


        
        showLabos();
        
        labo a = new labo();
        servicelabo cr = new servicelabo();
        //catSpec.addAll(cr.cherchercattitres());
        //Combo_spec.setItems(catSpec);

        
        

    }    

    
    
    
    @FXML
    void envoiSpecLaboBack(ActionEvent event) throws IOException {
	Parent root = FXMLLoader.load(getClass().getResource("specialiteLaboBack.fxml"));
	Scene scene = new Scene(root);
	Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
	stage.setScene(scene);
	stage.show();

    } 
    
    public void showLabos(){
         servicelabo cr = new servicelabo();
         ObservableList<labo> listlab = (ObservableList<labo>) cr.displayLabo();
       

         
       Col_id_l.setCellValueFactory(new PropertyValueFactory<labo, Integer>("idLabo") );
       Col_nom_l.setCellValueFactory(new PropertyValueFactory<labo, String>("nomLabo") );
       Col_adr_l.setCellValueFactory(new PropertyValueFactory<labo, String>("adresseLabo") );
       Col_tel_l.setCellValueFactory(new PropertyValueFactory<labo, String>("telLabo") );
       Col_email_l.setCellValueFactory(new PropertyValueFactory<labo, String>("emailLabo") );
       Col_spec_l.setCellValueFactory(new PropertyValueFactory<labo, String>("nomSpecialiteLabo") );
     
           labo a = new labo();
        catSpec.addAll(cr.cherchercattitres());
        Combo_spec.setItems(catSpec);
        
       tab_lab.setItems(listlab);
      
    }
    
    
    
    @FXML
    private void affichageTable(MouseEvent event) {
        labo a =tab_lab.getSelectionModel().getSelectedItem();
        
               String s=String.valueOf(a.getIdLabo());
               txt_id_l.setText(s);
              
               String s1=String.valueOf(a.getNomLabo());
               txt_nom_l.setText(s1);
               
               String s2=String.valueOf(a.getAdresseLabo());
               txt_adr_l.setText(s2);
               
               String s3=String.valueOf(a.getTelLabo());
               txt_tel_l.setText(s3);           
               
               String s4=String.valueOf(a.getEmailLabo());
               txt_email_l.setText(s4); 
               
               
               String spec = Combo_spec.getValue();
               int x=new servicespecialitelabo().findIDSpec(spec);
               
               spec =String.valueOf(a.getNomSpecialiteLabo());
               Combo_spec.setValue(spec);
               
               //String s5=String.valueOf(a.getIdSpecialiteLabo());
               //Combo_spec.setValue(s5);

               
    }

    @FXML
    private void AjouterLabo(ActionEvent event) {        
        labo a=new labo();
        servicelabo cr = new servicelabo();
//    int idlabo =Integer.parseInt(txt_id.getText());
//        a.setIdSpecialiteLabo(idlabo);
       a.setNomLabo(txt_nom_l.getText());
       a.setAdresseLabo(txt_adr_l.getText());
              
       //a.setTelLabo(txt_tel_l.getText());
       int tellabo =Integer.parseInt(txt_tel_l.getText());
       a.setTelLabo(tellabo);
       
       a.setEmailLabo(txt_email_l.getText());

       //a.setTelLabo(txt_tel_l.getText());
       
       String spec = Combo_spec.getValue();
        int x=new servicespecialitelabo().findIDSpec(spec);
        a.setIdSpecialiteLabo(x);
       
        //String ch = Combo_spec.getValue();
           
            //int idSpecialiteLabo=cr.chercherSpecLaboPid(ch);
            
            //a.setIdSpecialiteLabo(idSpecialiteLabo);
            
            
             
       
       //int idspecialitelabo =Integer.parseInt(txt_spec_l.getText());
       //a.setIdSpecialiteLabo(idspecialitelabo);
       
       cr.AjouterLabo(a);
       showLabos();
       
       TrayNotification tray = new TrayNotification();
        String title = "Laboratoire Ajouté";
        tray.setTitle(title);
        String message = "Ajout effectué avec succès !";
        tray.setMessage(message);
        tray.setNotificationType(NotificationType.SUCCESS);
        //tray.showAndWait();
        tray.showAndDismiss(seconds(2));
       
    }
    
    
    

    @FXML
    private void SupprimerLabo(ActionEvent event) {
        labo a = new labo();
        servicelabo cr = new servicelabo();
        int IDValue1 = Integer.parseInt(txt_id_l.getText());
        a.setIdLabo(IDValue1);
        cr.supprimerLabo(a);
        showLabos(); 
        
        
        TrayNotification tray = new TrayNotification();
        String title = "Spécialité Labo Supprimée";
        tray.setTitle(title);
        String message = "Suppression effectué avec succès !";
        tray.setMessage(message);
        tray.setNotificationType(NotificationType.SUCCESS);
        tray.showAndDismiss(seconds(2));
    }

    @FXML
    private void ModifierLabo(ActionEvent event) {
        labo a=new labo();
        servicelabo cr = new servicelabo();
 int IDValue1 = Integer.parseInt(txt_id_l.getText());
        a.setIdLabo(IDValue1);
        
        a.setNomLabo(txt_nom_l.getText());
        a.setAdresseLabo(txt_adr_l.getText());
        
  int IDValue2 = Integer.parseInt(txt_tel_l.getText());
        a.setTelLabo(IDValue2);       
        //a.setTelLabo(txt_tel_l.getText());
        
        a.setEmailLabo(txt_email_l.getText());
        
  //int IDValue3 = Integer.parseInt(txt_spec_l.getText());
        //a.setIdSpecialiteLabo(IDValue3);
        
        
        String spec = Combo_spec.getValue();
        int x=new servicespecialitelabo().findIDSpec(spec);
        a.setIdSpecialiteLabo(x);
        //a.setIdSpecialiteLabo(txt_spec_l.getText());

        
        cr.updateLabo(a);
        showLabos();
        
        TrayNotification tray = new TrayNotification();
        String title = "Laboratoire Modifié";
        tray.setTitle(title);
        String message = "Modification effectuée avec succès !";
        tray.setMessage(message);
        tray.setNotificationType(NotificationType.SUCCESS);
        tray.showAndDismiss(seconds(2));
        
        
    }
    
    
    
    @FXML
void recherchetype() {
    
       //Col_id_l.setCellValueFactory(new PropertyValueFactory<labo, Integer>("idLabo") );
       Col_nom_l.setCellValueFactory(new PropertyValueFactory<labo, String>("nomLabo") );
       Col_adr_l.setCellValueFactory(new PropertyValueFactory<labo, String>("adresseLabo") );
       Col_tel_l.setCellValueFactory(new PropertyValueFactory<labo, String>("telLabo") );
       Col_email_l.setCellValueFactory(new PropertyValueFactory<labo, String>("emailLabo") );
       Col_spec_l.setCellValueFactory(new PropertyValueFactory<labo, String>("nomSpecialiteLabo") );
     
        servicelabo cr = new servicelabo();
        ObservableList<labo> listlab = (ObservableList<labo>) cr.displayLabo();

        tab_lab.setItems(listlab);
        

        FilteredList<labo> filteredData = new FilteredList<>(listlab, b -> true);
		rechtype.textProperty().addListener((observable, oldValue, newValue) -> {
			filteredData.setPredicate((labo) -> {
								
				if (newValue == null ) {
					return true;
				}
				String lowerCaseFilter = newValue.toLowerCase();
				
				if (labo.getNomLabo().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
					return true; 
                                			}
                                
                                else if (labo.getAdresseLabo().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
					return true; 
                                			}
                                
                               // else if (labo.getTelLabo().toString().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
					//return true; 			}
                                
                                else if (labo.getEmailLabo().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
					return true; 
                                			}
                                
                                else if (labo.getNomSpecialiteLabo().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
					return true; 
                                			}
                                
                                
                        
				   else  
				    	 return false; 
			});
		});
         
		SortedList<labo> sortedData = new SortedList<>(filteredData);
              
		sortedData.comparatorProperty().bind(tab_lab.comparatorProperty());
		
		
		tab_lab.setItems(sortedData);
    }


    //public void comboBoxR(){
    //   ObservableList<specialitelabo> specialitelabos = new servicespecialitelabo().();
    // combo_spec.setItems(specialitelabos);
    //}

//uddate combobox

    
}


