<?php if(!defined('KIRBY')) exit ?>

title: Reportage
pages: false
files: true
  sortable: true
fields:
  title:
    label: Titel
    type:  text
  description:
    label: Omschrijving
    type:  textarea	
  text:
    label: Tekst
    type:  textarea
  categorie:
    label: Categorie
    type: checkboxes 
    options: field
    field:
      page: reportages
      name: categorie
      separator: ,  
  coverImage:
    label: Beeld overzichtspagina
    type: image    
    width: 1/2
  showonhome:
    label: Tonen op homepagina?
    type: toggle
    text: yes/no	