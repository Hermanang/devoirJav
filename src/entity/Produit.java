/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

/**
 *
 * @author Hermann
 */
public class Produit implements IProduit{
    
    private String refP, nom, paysOrigine;
    private Categorie categorie;

    public String getRefP() {
        return refP;
    }

    public String getNom() {
        return nom;
    }

    public String getPaysOrigine() {
        return paysOrigine;
    }

    public Categorie getCategorie() {
        return categorie;
    }

    public void setRefP(String refP) {
        this.refP = refP;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public void setPaysOrigine(String paysOrigine) {
        this.paysOrigine = paysOrigine;
    }

    public void setCategorie(Categorie categorie) {
        this.categorie = categorie;
    }

    @Override
    public void saisi() {
       
    }

    @Override
    public void afficher() {
        System.out.println("----------Affichage-------");
        System.out.println("Reference : "+this.getRefP());
        System.out.println("Nom : "+this.getNom());
        System.out.println("Pays d origine : "+this.paysOrigine);
        System.out.println("Categotir : "+this.getCategorie().getLibC());
    }
    
    
    
}
