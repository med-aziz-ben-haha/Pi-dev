/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.gui;

import SahtiTN.entities.labo;
import SahtiTN.services.servicelabo;
import java.io.IOException;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Insets;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.stage.Stage;


/**
 * FXML Controller class
 *
 * @author oussama
 */
public class LABOFRONTController implements Initializable {

    @FXML
    private Hyperlink btn_accueil;
    @FXML
    private Label id_ID;
    @FXML
    private AnchorPane home;
    @FXML
    private GridPane gridlab;

    private List<labo> data;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        
        data = new ArrayList();
        servicelabo laboService =new servicelabo();
        laboService.getAll().forEach((lab) -> {
            data.add(lab);
        });
        
        int column = 0;
        int row = 0;

        for (int i = 0; i < data.size(); i++) {

            try {
                FXMLLoader fxmlLoader = new FXMLLoader();

                fxmlLoader.setLocation(getClass().getResource("CardLabo.fxml"));
                AnchorPane anchorPane = fxmlLoader.load();
                CardLaboController cardController = fxmlLoader.getController();
                CardLaboController c = new CardLaboController();
               
                column++;

                c.setData(data.get(i));
                
                if (column == 5) {
                    column = 1;
                    row++;
                }

                gridlab.add(c.getBox(), column, row);

                GridPane.setMargin(anchorPane, new Insets(2));
            } catch (IOException ex) {
                Logger.getLogger(CardLaboController.class.getName()).log(Level.SEVERE, null, ex);
            }

        }
        
    }    

    @FXML
    private void envoiAccueil(ActionEvent event) {
    }
    
}
