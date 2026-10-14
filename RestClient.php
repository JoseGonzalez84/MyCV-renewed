<?php
/**
 * Simple REST Client helper class without Composer dependencies.
 * Uses native cURL to perform HTTP requests (GET, POST, PUT, DELETE, etc.).
 */
class RestClient {
    private string $baseUrl;
    private int $timeout;
    private array $defaultHeaders;

    public function __construct(string $baseUrl = '', int $timeout = 30, array $defaultHeaders = []) {
        $this->baseUrl = rtrim($baseUrl, '/');
        $this->timeout = $timeout;
        $this->defaultHeaders = array_merge([
            'Content-Type: application/json',
            'Accept: application/json',
            'User-Agent: curl/Portfolio-JoseGonzalez',
        ], $defaultHeaders);
    }

    private function request(string $method, string $endpoint, $data = null, array $headers = []): array {
        $url = $this->baseUrl ? $this->baseUrl . '/' . ltrim($endpoint, '/') : $endpoint;
        
        $ch = curl_init();

        $curlOptions = [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_TIMEOUT => $this->timeout,
            CURLOPT_CUSTOMREQUEST => strtoupper($method),
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_SSL_VERIFYHOST => 2,
        ];

        $reqHeaders = array_merge($this->defaultHeaders, $headers);

        if ($data !== null) {
            $payload = is_array($data) || is_object($data) ? json_encode($data) : $data;
            $curlOptions[CURLOPT_POSTFIELDS] = $payload;
            $reqHeaders[] = 'Content-Length: ' . strlen($payload);
        }

        $curlOptions[CURLOPT_HTTPHEADER] = $reqHeaders;

        curl_setopt_array($ch, $curlOptions);

        $responseBody = curl_exec($ch);
        $errorNumber = curl_errno($ch);
        $errorMessage = curl_error($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        curl_close($ch);

        if ($errorNumber !== 0) {
            return [
                'success' => false,
                'status_code' => 0,
                'error' => $errorMessage,
                'data' => null
            ];
        }

        $decodedData = json_decode($responseBody, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            $decodedData = $responseBody;
        }

        return [
            'success' => $statusCode >= 200 && $statusCode < 300,
            'status_code' => $statusCode,
            'error' => null,
            'data' => $decodedData
        ];
    }

    public function get(string $endpoint, array $queryParams = [], array $headers = []): array {
        if (!empty($queryParams)) {
            $endpoint .= (str_contains($endpoint, '?') ? '&' : '?') . http_build_query($queryParams);
        }
        return $this->request('GET', $endpoint, null, $headers);
    }

    public function post(string $endpoint, $data = null, array $headers = []): array {
        return $this->request('POST', $endpoint, $data, $headers);
    }

    public function put(string $endpoint, $data = null, array $headers = []): array {
        return $this->request('PUT', $endpoint, $data, $headers);
    }

    public function delete(string $endpoint, $data = null, array $headers = []): array {
        return $this->request('DELETE', $endpoint, $data, $headers);
    }
}
