/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.entities;

/**
 *
 * @author bhk
 */
public class TypeReclamation {
 
      private int id ;
 
    private String typeReclamation;

    public int getId() {
        return id;
    }

    public TypeReclamation(String type_reclamation) {
        this.typeReclamation = type_reclamation;
    }

    public TypeReclamation(int id, String type_reclamation) {
        this.id = id;
        this.typeReclamation = type_reclamation;
    }

    public TypeReclamation() {
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getTypeReclamation() {
        return typeReclamation;
    }

    public void setTypeReclamation(String typeReclamation) {
        this.typeReclamation = typeReclamation;
    }


    
}
