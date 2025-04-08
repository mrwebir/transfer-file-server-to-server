🔁 Fast File Transfer Between Hosts (PHP Script)
This simple PHP script is designed to download a ZIP file from a remote host and store it directly into the public_html folder of the current host. It performs the entire transfer process online and automatically, making it ideal for quick file migrations, backups, or deployment processes.

🚀 Features
Downloads a .zip file from any specified external URL (remote host).

Saves the file directly into the destination server’s public_html directory.

Requires no manual upload or FTP client.

Executes fast and efficiently via a simple HTTP request to the script.

🧠 How It Works
Define the Source URL
You specify the full URL of the ZIP file located on the source host.

Set the Destination Path
The script calculates the destination path using PHP’s $_SERVER['DOCUMENT_ROOT'] to ensure the file is stored in the root of public_html.

Download the File
It uses file_get_contents() to fetch the content of the file from the source URL.

Save the File
The content is saved using file_put_contents() into the specified path on the destination server.

Error Handling
If the file cannot be downloaded or saved, appropriate error messages are returned.

📦 Use Cases
Migrating large zipped files (e.g., WordPress backups) between hosting accounts.

Quickly deploying zip packages from a central source.

Remotely triggering file transfers without FTP or SSH access.

Automating deployment processes in web projects.

⚠️ Important Notes
Make sure allow_url_fopen is enabled in your PHP configuration.

Ensure the target folder (public_html) has write permissions.

Use this script responsibly on trusted sources to avoid security risks.
