<?php


namespace Controllers;

use Core\View;
use Models\NoteModel;

class Note extends AbstractController
{
    public function index()
    {
        $model = new NoteModel();
        $this->view->render('note_index_page', [
            'notes' => $model->all(),
        ]);
    }
}