<?php

namespace App\Services\Interfaces;
use Illuminate\Http\UploadedFile;

interface IAwsService{
    public function create(UploadedFile $file);
    public function show(string $url);
    public function delete(string $url);  
    public function createFolder(string $folderName);
    // public function update(string $folderName);
    public function showFolder(string $folderName);
    public function deleteFolder(string $folderName);  
    
}
?>
