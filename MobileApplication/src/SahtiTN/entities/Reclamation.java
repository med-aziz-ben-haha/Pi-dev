/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package SahtiTN.entities;

public class Reclamation {
     
    private int id ;
    private int user_id ;
    private int type_reclamation_id ;
    private String description_reclamation;
    private String reponse ;
    
    
    
    
    
    
    public int getUser_id() {
        return user_id;
    }

    public void setUser_id(int user_id) {
        this.user_id = user_id;
    }

    public int getType_reclamation_id() {
        return type_reclamation_id;
    }

    public void setType_reclamation_id(int type_reclamation_id) {
        this.type_reclamation_id = type_reclamation_id;
    }

    public Reclamation(int user_id, int type_reclamation_id) {
        this.user_id = user_id;
        this.type_reclamation_id = type_reclamation_id;
    }
    

   

    public Reclamation(int id, String description_reclamation, String reponse) {
        this.id = id;
        this.description_reclamation = description_reclamation;
        this.reponse = reponse;
    }
       public Reclamation() {
       
    }

    public int getId() {
        return id;
    }

    public String getDescription_reclamation() {
        return description_reclamation;
    }

    public String getReponse() {
        return reponse;
    }

    public void setId(int id) {
        this.id = id;
    }

    public void setDescription_reclamation(String description_reclamation) {
        this.description_reclamation = description_reclamation;
    }

    public void setReponse(String reponse) {
        this.reponse = reponse;
    }

    @Override
    public String toString() {
        
        if(reponse.equalsIgnoreCase("Reclamation en cours"))
            { return description_reclamation;}
        else
                    {return description_reclamation + " ||   reponse=" + reponse ;}

        
    }
    
}
