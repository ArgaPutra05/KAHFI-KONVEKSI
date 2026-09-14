<?php
// Set working directory to project root for Vercel
chdir(dirname(__DIR__));

// Entry point for Vercel Serverless Function
require_once __DIR__ . '/../index.php';
