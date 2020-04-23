# Encryt-and-Decrypt-Data-of-file-uploaded-to-a-website
The files are encrypted before storing, and decryption of the file content is done before the user is able to download.
We have made a website, which lets a user upload a file to the webserver, once the file is uploaded, the content of the file is encrypted using Blowfish algorithm, this is done on the server side and the content is stored in encrypted format on the server's database.
This done so that, even if someone gets to the database of the server, they wont be able to read the content of the file.
Also when the user tries to download the file, the decryption of the cipher text of the file is done on the server side. Later the user download the file in proper format as uploaded and not letting the user know that any cryptographic process was performed on the same.
