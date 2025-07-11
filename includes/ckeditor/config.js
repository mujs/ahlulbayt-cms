/*
Copyright (c) 2003-2011, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
*/

CKEDITOR.editorConfig = function( config )
{
	// Define changes to default configuration here. For example:
    config.language = 'ar';
	config.uiColor = '#EAEAEA';
    config.toolbar = 'Ahlulbayt';
 
    config.toolbar_Ahlulbayt =
    [
    ['Source'],
    ['Cut','Copy','Paste','PasteText','PasteFromWord'],
    ['Undo','Redo','-','Find','Replace','-','SelectAll','RemoveFormat'],
    '/',
    ['Bold','Italic','Underline','Strike'],
    ['NumberedList','BulletedList','-','Outdent','Indent','Blockquote','CreateDiv'],
    ['JustifyRight','JustifyCenter','JustifyLeft','JustifyBlock'],
    ['BidiRtl', 'BidiLtr'],
    ['Link','Unlink','Anchor'],
    ['Image','Flash','Table','HorizontalRule','Smiley','SpecialChar','PageBreak','Iframe'],
    '/',
    ['Format','Font','FontSize'],
    ['TextColor','BGColor']
    ];
};
