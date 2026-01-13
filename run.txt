#!/bin/bash

# Jalankan Laravel di port 8000
php artisan serve --port=1111 &

# Simpan PID Laravel
LARAVEL_PID=$!

echo "Laravel berjalan dengan PID: $LARAVEL_PID"

# Jalankan Cloudflare Tunnel
cloudflared tunnel run --token eyJhIjoiZDdjZjFkZmUxN2JlZWFjMmFjZDA1NjU4ZDM2MjE4NjciLCJ0IjoiYTFjYTNiMDEtYmM0Zi00OTMxLTk5YzktOTJkMTZiZmNkOTk2IiwicyI6IlltVXhPVFJpTXpFdE4ySTNZeTAwWTJNekxUazBObVF0WlRNMFl6RmxZakpqTlROaSJ9
# Jika Cloudflare Tunnel berhenti, hentikan Laravel juga
kill $LARAVEL_PID
