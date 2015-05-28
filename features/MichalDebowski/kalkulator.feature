Feature: Obliczenia

  Scenario: Pole Prostokata a * b
    Given I am on homepage
    When I follow "Kalkulator by MichalDebowski"
    And I fill in "A" with "6"
    And I fill in "B" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 18"