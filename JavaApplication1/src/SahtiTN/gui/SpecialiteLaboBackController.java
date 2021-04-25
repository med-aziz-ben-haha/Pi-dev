/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.specialitelabo;
import SahtiTN.services.servicespecialitelabo;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
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
public class SpecialiteLaboBackController implements Initializable {

    @FXML
    private TableView<specialitelabo> tab_sp;
    private TableColumn<specialitelabo, Integer> Col_id;
    @FXML
    private TableColumn<specialitelabo, String> Col_nom;
    @FXML
    private TableColumn<specialitelabo, String> Col_lib;
    @FXML
    private Button btn_aj;
    @FXML
    private Button btn_supp;
    @FXML
    private TextField txt_specialite;
    @FXML
    private TextArea txt_lib;
    @FXML
    private TextField txt_id;

    @FXML
    private Button btn_modif;
    @FXML
    private TextField recherche_f;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
       txt_id.setVisible(false);

        showSpecialites();
    }    

    
    
@FXML
    void envoiLaboBack(ActionEvent event) throws IOException {
	Parent root = FXMLLoader.load(getClass().getResource("FXMLLABO.fxml"));
	Scene scene = new Scene(root);
	Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
	stage.setScene(scene);
	stage.show();

    }    
    
    
    public void showSpecialites(){
         servicespecialitelabo cr = new servicespecialitelabo();
         ObservableList<specialitelabo> listspec = cr.displaySpeciliteLabo();
       
        
//        Col_id.setCellValueFactory(new PropertyValueFactory<specialitelabo, Integer>("idSpecialiteLabo") );
       Col_nom.setCellValueFactory(new PropertyValueFactory<specialitelabo, String>("nomSpecialiteLabo") );
       Col_lib.setCellValueFactory(new PropertyValueFactory<specialitelabo, String>("libelleSpecialiteLabo") );
      
      
       tab_sp.setItems(listspec);
      
    }
 
    
    @FXML
    private void AjouterSpecialiteLabo(ActionEvent event) {
    
     specialitelabo a=new specialitelabo();
        servicespecialitelabo cr = new servicespecialitelabo();
    //int idlabo =Integer.parseInt(txt_id.getText());
     //   a.setIdSpecialiteLabo(idlabo);
       a.setNomSpecialiteLabo(txt_specialite.getText());
       
       
        
       btn_aj.setOnAction(e -> {
           
           String x =new servicespecialitelabo().verifSpec(txt_specialite.getText());
           if (x==null){
               specialitelabo spec = new specialitelabo();
           spec.setNomSpecialiteLabo(txt_specialite.getText());
           
           new servicespecialitelabo().AjouterSpeciliteLabo(spec);
           txt_specialite.setText("");
           showSpecialites();
           }
           else{
               Alert alert = new Alert(Alert.AlertType.WARNING);
            alert.setTitle("Specialite Labo Validation");
            alert.setContentText("Specialite deja existante");
            alert.showAndWait();
            
           }
           
           
       });
       
       
       
       
       
       
       
       
       a.setLibelleSpecialiteLabo(txt_lib.getText());
       cr.AjouterSpeciliteLabo(a);
       showSpecialites();
       
       TrayNotification tray = new TrayNotification();
        String title = "Spécialité Labo Ajoutée";
        tray.setTitle(title);
        String message = "Ajout effectuée avec succès !";
        tray.setMessage(message);
        tray.setNotificationType(NotificationType.SUCCESS);
        tray.showAndDismiss(seconds(2));

    
    }

    @FXML
    private void ModifierSpecialiteLabo(ActionEvent event) {
         specialitelabo a=new specialitelabo();
        servicespecialitelabo cr = new servicespecialitelabo();
 int IDValue1 = Integer.parseInt(txt_id.getText());
        a.setIdSpecialiteLabo(IDValue1);
        a.setNomSpecialiteLabo(txt_specialite.getText());
        a.setLibelleSpecialiteLabo(txt_lib.getText());
        
        TrayNotification tray = new TrayNotification();
        String title = "Spécialité Labo Modifiée";
        tray.setTitle(title);
        String message = "modification effectuée avec succès !";
        tray.setMessage(message);
        tray.setNotificationType(NotificationType.SUCCESS);
        tray.showAndDismiss(seconds(2));
        
        cr.updateSpeciliteLabo(a);
        showSpecialites();
        
        
        
    }

    @FXML
    private void SupprimerSpecialiteLabo(ActionEvent event) {
        specialitelabo a=new specialitelabo();
        servicespecialitelabo cr = new servicespecialitelabo();
        int IDValue = Integer.parseInt(txt_id.getText());
        a.setIdSpecialiteLabo(IDValue);
        cr.supprimerSpeciliteLabo(a);
        showSpecialites(); 
        
        TrayNotification tray = new TrayNotification();
        String title = "Spécialité Labo Supprimée";
        tray.setTitle(title);
        String message = "Suppression effectuée avec succès !";
        tray.setMessage(message);
        tray.setNotificationType(NotificationType.SUCCESS);
        tray.showAndDismiss(seconds(2));

        
    }

    
    @FXML
    private void affichageTable(MouseEvent event) {
        
         specialitelabo a =tab_sp.getSelectionModel().getSelectedItem();
        
               String s=String.valueOf(a.getIdSpecialiteLabo());
               txt_id.setText(s);
              
                 String s1=String.valueOf(a.getNomSpecialiteLabo());
               txt_specialite.setText(s1);
               
                 String s2=String.valueOf(a.getLibelleSpecialiteLabo());
               txt_lib.setText(s2);
    }


    @FXML
 void recherchetype() {
         //Col_id.setCellValueFactory(new PropertyValueFactory<specialitelabo, Integer>("idSpecialiteLabo") );
         Col_nom.setCellValueFactory(new PropertyValueFactory<specialitelabo, String>("nomSpecialiteLabo") );
         Col_lib.setCellValueFactory(new PropertyValueFactory<specialitelabo, String>("libelleSpecialiteLabo") );
        
       
            servicespecialitelabo cr = new servicespecialitelabo();
            ObservableList<specialitelabo> list = cr.displaySpeciliteLabo();
            tab_sp.setItems(list);

        FilteredList<specialitelabo> filteredData = new FilteredList<>(list, b -> true);
		recherche_f.textProperty().addListener((observable, oldValue, newValue) -> {
			filteredData.setPredicate((specialitelabo) -> {
								
				if (newValue == null ) {
					return true;
				}
				String lowerCaseFilter = newValue.toLowerCase();
				
				if (specialitelabo.getNomSpecialiteLabo().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
					return true; 
                                			}
                                
                                else if (specialitelabo.getLibelleSpecialiteLabo().toLowerCase().indexOf(lowerCaseFilter) != -1 ) {
					return true; 
                                			}
                                
                        
				   else  
				    	 return false; 
			});
		});
         
		SortedList<specialitelabo> sortedData = new SortedList<>(filteredData);
              
		sortedData.comparatorProperty().bind(tab_sp.comparatorProperty());
		
		
		tab_sp.setItems(sortedData);
    }


    
}
