const express = require('express');
const { exec } = require('child_process');
const path = require('path');
const app = express();
const port = process.env.PORT || 3000;

app.use(express.static('public'));

app.get('*', (req, res) => {
    const filePath = path.join(__dirname, 'public', req.url);
    if (filePath.endsWith('.php')) {
        exec(`php-cgi ${filePath}`, (error, stdout, stderr) => {
            if (error) {
                res.status(500).send(`Error: ${stderr}`);
            } else {
                res.send(stdout);
            }
        });
    } else {
        res.sendFile(filePath);
    }
});

app.listen(port, () => {
    console.log(`Server is running on port ${port}`);
});
