from http.server import HTTPServer, CGIHTTPRequestHandler

class Handler(CGIHTTPRequestHandler):
    cgi_directories = ["/cgi-bin/"]

PORT = 8000

httpd = HTTPServer(('localhost', PORT), Handler)
print(f"Serving at port {PORT}")
httpd.serve_forever()
