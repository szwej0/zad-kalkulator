Feature: Obliczenia

  Scenario: V prostopadłościanu
    Given I am on homepage
    When I follow "Objętość prostopadłościanu by krzysztof90"
    And I fill in "A" with "15"
    And I fill in "B" with "10"
    And I fill in "C" with "3"
    And I press "Oblicz"
    Then I should see "Wynik wynosi: 450"
